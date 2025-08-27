<?php
session_start();
$title = "Dashboard";
include "templates/header.php";
?>

<div id="main">
    <div class="page-heading">
        <h3>Dashboard</h3>
        <p class="text-subtitle text-muted">Overview of key metrics</p>
    </div>
    
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Key Metrics</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <canvas id="myChart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Recent Products</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <table class="table table-md" id="recent-products">
                        <thead>
                            <tr>
                                <th>Reference</th>
                                <th>Libelle</th>
                                <th>Prix</th>
                                <th>Quantite</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $products = Produit::afficher(); // Assuming this method fetches recent products
                            foreach ($products as $product) {
                                echo "<tr>
                                        <td>{$product->get('r')}</td>
                                        <td>{$product->get('l')}</td>
                                        <td>{$product->get('p')}</td>
                                        <td>{$product->get('q')}</td>
                                      </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include "templates/footer.php"; ?>

<script src="assets/js/charts.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        createChart(); // Function to create charts
    });
</script>