<!-- Place your HTML and Blade code for the create page here -->
<!-- For example: -->
<div class="container mx-auto">
    <h1>Create Order</h1>
    <p>Selected Items:</p>
    <ul>
        @foreach ($selectedItems as $itemId)
            <li>{{ $itemId }}</li>
        @endforeach
    </ul>
    <!-- Add more HTML and Blade code for the create page as needed -->
</div>
