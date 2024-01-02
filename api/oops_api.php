<?php

class ProductSearch {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function searchProducts($query) {
        $sql = "SELECT * FROM products WHERE title LIKE '%$query%' OR description LIKE '%$query%'";
        $result = mysqli_query($this->conn, $sql);

        $html = '';

        if ($result->num_rows > 0) {
            while ($product = $result->fetch_assoc()) {
                $html .= $this->generateProductHtml($product);
                $html .= '<hr>';
            }
        } else {
            $html = '<p class="text-center">Oops! Product not found.</p>';
        }

        return $html;
    }

    private function generateProductHtml($product) {
        $html = '<a href="product_details.php?id=' . $product['id'] . '" class="text-decoration-none">';
        $html .= '<div class="row pt-2 w-50 m-2">';
        $html .= '<div class="col-lg-4 col-md-4 col-sm-4">';
        $html .= '<img src="images/' . $product['image_link'] . '" alt="' . $product['title'] . '" class="img-fluid rounded" width="150" height="150">';
        $html .= '</div>';
        $html .= '<div class="col-lg-8 col-md-8 col-sm-6 ">';
        $html .= '<div class="d-flex flex-column h-100">';
        $html .= '<h3 class="text-dark mb-3">' . $product['title'] . '</h3>';
        $html .= '<p class="text-dark">' . $product['description'] . '</p>';
        $html .= '</div>';
        $html .= '</div>';
        $html .= '</div>';
        $html .= '</a>';

        return $html;
    }
}

include 'db.php';

if (isset($_GET['query'])) {
    $query = $_GET['query'];
    $productSearch = new ProductSearch($conn);
    $html = $productSearch->searchProducts($query);

    $response = array('html' => $html);
    echo json_encode($response);
}

$conn->close();
?>
