<?php
$title = "Dashboard";
include "../../templates/header.php";
?>

<div id="main">
    <br>
    <div class="page-heading">
        <div class="page-title">
            <h3>Dashboard</h3>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Key Metrics</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="metric">
                                <h5>Total Products</h5>
                                <p id="total-products">0</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="metric">
                                <h5>Total Sales</h5>
                                <p id="total-sales">0</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="metric">
                                <h5>Total Revenue</h5>
                                <p id="total-revenue">0</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Sales Overview</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <canvas id="salesChart"></canvas>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Product Distribution</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <canvas id="productChart"></canvas>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include "../../templates/footer.php"; ?>

<script src="../../assets/js/charts.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        loadDashboardData();
        renderSalesChart();
        renderProductChart();
    });
</script>