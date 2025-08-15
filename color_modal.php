<!-- Color Selection Modal -->

        

<script>
let currentProduct = null;
let selectedColor = '';
let callbackFunction = null;

function showColorModal(product, callback) {
    currentProduct = product;
    callbackFunction = callback;
    const modal = document.getElementById('colorModal');
    const productImage = document.getElementById('modalProductImage');
    const productName = document.getElementById('modalProductName');
    const productPrice = document.getElementById('modalProductPrice');
    const productStorage = document.getElementById('modalProductStorage');
    const confirmBtn = document.getElementById('confirmBtn');
    
    // Reset selection
    selectedColor = '';
    confirmBtn.disabled = true;
    
    // Update product info
    productImage.src = product.img;
    productImage.alt = product.name;
    productName.textContent = product.name;
    productPrice.textContent = '₱' + product.price.toLocaleString();
    productStorage.textContent = product.gb || '';
    
    // Show modal
    modal.style.display = 'block';
    
    // Close modal when clicking outside
    window.onclick = function(event) {
        if (event.target == modal) {
            closeColorModal();
        }
    }
}

function selectColor(color, element) {
    // Remove selected class from all options
    const options = document.querySelectorAll('#colorOptions > div');
    options.forEach(option => {
        option.style.border = 'none';
    });
    
    // Add selected class to clicked option
    element.style.border = '2px solid #4CAF50';
    
    // Update selected color
    selectedColor = color;
    document.getElementById('confirmBtn').disabled = false;
}

document.getElementById('confirmBtn').addEventListener('click', function() {
    if (selectedColor && currentProduct && callbackFunction) {
        // Add the selected color to the product
        currentProduct.color = selectedColor;
        callbackFunction(currentProduct);
        closeColorModal();
    } else {
        alert('Please select a color');
    }
});

function closeColorModal() {
    document.getElementById('colorModal').style.display = 'none';
}
</script>

<style>
.modal-content {
    animation: modalFadeIn 0.3s ease-out;
}

@keyframes modalFadeIn {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
}

.close:hover,
.close:focus {
    color: #f26522;
    text-decoration: none;
    cursor: pointer;
}

#confirmBtn:disabled {
    background-color: #cccccc !important;
    cursor: not-allowed !important;
}

#confirmBtn:not(:disabled):hover {
    background-color: #e05d1a !important;
}

button[onclick="closeColorModal()"]:hover {
    background-color: #5a6268 !important;
}
</style>
