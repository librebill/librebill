<!-- User Info Card -->
<div class="card mb-4">
    <div class="card-body text-center">
        <img src="https://www.gravatar.com/avatar/{{ md5(strtolower(trim(auth()->user()->email))) }}?d=mp&s=100"
            alt="User Gravatar" class="rounded-circle mb-3" width="100" height="100">
        <h5 class="card-title">{{ auth()->user()->first_name }}
            {{ auth()->user()->middle_name }} {{ auth()->user()->last_name }}</h5>
        <p class="card-text text-muted">{{ auth()->user()->email }}</p>
    </div>
</div>

<!-- Quick Links Card -->
<div class="card">
    <div class="card-header">
        Quick Links
    </div>
    <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action"><i
                class="fa-solid fa-fw fa-file-invoice me-2"></i>Billing & Invoices</a>
        <a href="#" class="list-group-item list-group-item-action"><i
                class="fa-solid fa-fw fa-briefcase me-2"></i>My Services</a>
        <a href="#" class="list-group-item list-group-item-action"><i
                class="fa-solid fa-fw fa-cart-plus me-2"></i>Order New Services</a>
        <a href="#" class="list-group-item list-group-item-action"><i
                class="fa-solid fa-fw fa-life-ring me-2"></i>Support Center</a>
    </div>
</div>
