<div class="row">
    <div class="col-md-4 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-users me-2"></i> Total Users</h5>
            </div>
            <div class="card-body">
                <h3>1,234</h3>
                <p class="text-muted">+5% from last month</p>
                <div class="progress" style="height: 8px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%;" aria-valuenow="75"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-box me-2"></i> Total Products</h5>
            </div>
            <div class="card-body">
                <h3>567</h3>
                <p class="text-muted">+10% from last month</p>
                <div class="progress" style="height: 8px;">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 60%;" aria-valuenow="60"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-list me-2"></i> Total Categories</h5>
            </div>
            <div class="card-body">
                <h3>45</h3>
                <p class="text-muted">+2% from last month</p>
                <div class="progress" style="height: 8px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 50%;" aria-valuenow="50"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-chart-line me-2"></i> Activity Overview</h5>
            </div>
            <div class="card-body">
                <canvas id="activityChart" height="100"></canvas>
            </div>
        </div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('activityChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'User Activity',
                data: [120, 190, 300, 500, 400, 600],
                borderColor: '#60a5fa',
                backgroundColor: 'rgba(59, 130, 246, 0.2)',
                fill: true,
                tension: 0.4
            }, {
                label: 'Product Views',
                data: [80, 150, 200, 350, 300, 450],
                borderColor: '#34d399',
                backgroundColor: 'rgba(52, 211, 153, 0.2)',
                fill: true,
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                    labels: {
                        color: '#e2e8f0'
                    }
                },
                title: {
                    display: true,
                    text: 'Monthly Activity',
                    color: '#e2e8f0'
                }
            },
            scales: {
                x: {
                    ticks: {
                        color: '#e2e8f0'
                    }
                },
                y: {
                    ticks: {
                        color: '#e2e8f0'
                    },
                    beginAtZero: true
                }
            }
        }
    });
});
</script>