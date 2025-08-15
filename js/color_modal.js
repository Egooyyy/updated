// Color options for different iPhone models
const iPhoneColors = {
    'default': [
        { name: 'Black', value: '#000000' },
        { name: 'White', value: '#ffffff' },
        { name: 'Blue', value: '#1e90ff' },
        { name: 'Red', value: '#ff3b30' },
        { name: 'Gold', value: '#ffd700' },
        { name: 'Graphite', value: '#383838' },
        { name: 'Silver', value: '#c0c0c0' },
        { name: 'Rose Gold', value: '#b76e79' },
        { name: 'Midnight Green', value: '#004953' },
        { name: 'Pacific Blue', value: '#1ca3ec' },
        { name: 'Purple', value: '#800080' },
        { name: 'Green', value: '#008000' },
        { name: 'Alpine Green', value: '#5f8d4e' },
        { name: 'Sierra Blue', value: '#69abce' },
        { name: 'Deep Purple', value: '#472183' }
    ],
    'pro': [
        { name: 'Graphite', value: '#383838' },
        { name: 'Gold', value: '#ffd700' },
        { name: 'Silver', value: '#c0c0c0' },
        { name: 'Sierra Blue', value: '#69abce' },
        { name: 'Alpine Green', value: '#5f8d4e' },
        { name: 'Deep Purple', value: '#472183' }
    ],
    'standard': [
        { name: 'Black', value: '#000000' },
        { name: 'White', value: '#ffffff' },
        { name: 'Blue', value: '#1e90ff' },
        { name: 'Red', value: '#ff3b30' },
        { name: 'Purple', value: '#800080' },
        { name: 'Green', value: '#008000' }
    ]
};

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
    const colorOptions = document.getElementById('colorOptions');
    
    // Reset selection
    selectedColor = '';
    document.getElementById('confirmBtn').disabled = true;
    
    // Update product info
    productImage.src = product.img || 'images/default-product.jpg';
    productImage.alt = product.name;
    productName.textContent = product.name;
    productPrice.textContent = '₱' + parseFloat(product.price).toLocaleString();
    productStorage.textContent = product.gb || '';
    
    // Clear previous color options
    colorOptions.innerHTML = '';
    
    // Determine which color set to use
    const colorSet = product.name.toLowerCase().includes('pro') ? 'pro' : 
                    (product.name.toLowerCase().includes('max') ? 'pro' : 'standard');
    const colors = iPhoneColors[colorSet] || iPhoneColors['standard'];
    
    // Add color options
    colors.forEach(color => {
        const colorDiv = document.createElement('div');
        colorDiv.style.display = 'inline-flex';
        colorDiv.style.flexDirection = 'column';
        colorDiv.style.alignItems = 'center';
        colorDiv.style.margin = '10px';
        colorDiv.style.cursor = 'pointer';
        
        const colorSwatch = document.createElement('div');
        colorSwatch.style.width = '40px';
        colorSwatch.style.height = '40px';
        colorSwatch.style.borderRadius = '50%';
        colorSwatch.style.backgroundColor = color.value;
        colorSwatch.style.border = '2px solid #ddd';
        colorSwatch.style.transition = 'all 0.3s';
        
        const colorLabel = document.createElement('span');
        colorLabel.textContent = color.name;
        colorLabel.style.marginTop = '5px';
        colorLabel.style.fontSize = '12px';
        colorLabel.style.color = '#666';
        
        colorDiv.appendChild(colorSwatch);
        colorDiv.appendChild(colorLabel);
        
        colorDiv.onclick = function() {
            // Remove selected class from all options
            document.querySelectorAll('#colorOptions > div').forEach(div => {
                div.firstChild.style.border = '2px solid #ddd';
                div.firstChild.style.transform = 'scale(1)';
            });
            
            // Add selected class to clicked option
            colorSwatch.style.border = '2px solid #f26522';
            colorSwatch.style.transform = 'scale(1.1)';
            selectedColor = color.name;
            document.getElementById('confirmBtn').disabled = false;
        };
        
        colorOptions.appendChild(colorDiv);
    });
    
    // Show the modal
    modal.style.display = 'block';
    
    // Close modal when clicking outside
    window.onclick = function(event) {
        if (event.target == modal) {
            closeColorModal();
        }
    };
}

function closeColorModal() {
    const modal = document.getElementById('colorModal');
    modal.style.display = 'none';
    currentProduct = null;
    selectedColor = '';
    callbackFunction = null;
}

// Function to handle Buy Now button clicks
function handleBuyNowClick(event, productName, price, gb, img) {
    event.preventDefault();
    
    // Create product object with available colors
    const product = {
        name: productName,
        price: parseFloat(price.toString().replace(/[^0-9.-]+/g,"")), // Remove currency symbols and convert to number
        gb: gb || '',
        img: img || 'images/default-product.jpg'
    };
    
    // Show color selection modal
    showColorModal(product, (selectedProduct) => {
        // Redirect to cart.php with product details as URL parameters
        const params = new URLSearchParams();
        params.append('add', '1');
        params.append('name', encodeURIComponent(selectedProduct.name));
        params.append('price', selectedProduct.price);
        params.append('gb', encodeURIComponent(selectedProduct.gb));
        params.append('color', encodeURIComponent(selectedColor));
        params.append('qty', '1');
        params.append('img', encodeURIComponent(selectedProduct.img));
        
        window.location.href = 'cart.php?' + params.toString();
    });
}

// Function to handle Add to Cart button clicks
function handleAddToCart(event, productName, price, gb, img) {
    event.preventDefault();
    
    // Create product object with available colors
    const product = {
        name: productName,
        price: typeof price === 'string' ? parseFloat(price.replace(/[^0-9.-]+/g,"")) : price,
        gb: gb || '',
        img: img || 'images/default-product.jpg',
        colors: getColorVariants(productName)
    };
    
    // Show color selection modal
    showColorModal(product, (selectedProduct) => {
        // Create a form to submit the data
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = 'add_to_cart.php';
        
        // Add product details as hidden inputs
        const addInput = (name, value) => {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = name;
            input.value = value;
            form.appendChild(input);
        };
        
        addInput('name', selectedProduct.name);
        addInput('price', selectedProduct.price);
        addInput('gb', selectedProduct.gb);
        addInput('color', selectedProduct.selectedColor);
        addInput('qty', '1');
        addInput('img', selectedProduct.img);
        
        // Submit the form
        document.body.appendChild(form);
        form.submit();
    });
}

// Helper function to get color variants based on product name
function getColorVariants(productName) {
    const name = productName.toLowerCase();
    
    // Define color variants for different iPhone models
    const colorVariants = {
        // Pro models
        pro: [
            { name: 'Graphite', value: '#383838' },
            { name: 'Gold', value: '#ffd700' },
            { name: 'Silver', value: '#c0c0c0' },
            { name: 'Sierra Blue', value: '#69abce' },
            { name: 'Alpine Green', value: '#5f8d4e' },
            { name: 'Deep Purple', value: '#472183' }
        ],
        // Standard models
        standard: [
            { name: 'Black', value: '#000000' },
            { name: 'White', value: '#ffffff' },
            { name: 'Blue', value: '#1e90ff' },
            { name: 'Red', value: '#ff3b30' },
            { name: 'Purple', value: '#800080' },
            { name: 'Green', value: '#008000' },
            { name: 'Yellow', value: '#ffd700' },
            { name: 'Coral', value: '#ff7f50' }
        ]
    };
    
    // Determine which color set to use
    if (name.includes('pro') || name.includes('max')) {
        return colorVariants.pro;
    }
    return colorVariants.standard;
}

// Update handleBuyNowClick to use the same color variants
function handleBuyNowClick(event, productName, price, gb, img) {
    event.preventDefault();
    
    // Create product object with available colors
    const product = {
        name: productName,
        price: typeof price === 'string' ? parseFloat(price.replace(/[^0-9.-]+/g,"")) : price,
        gb: gb || '',
        img: img || 'images/default-product.jpg',
        colors: getColorVariants(productName)
    };
    
    // Show color selection modal
    showColorModal(product, (selectedProduct) => {
        // Redirect to cart.php with product details as URL parameters
        const params = new URLSearchParams();
        params.append('add', '1');
        params.append('name', selectedProduct.name);
        params.append('price', selectedProduct.price);
        params.append('gb', selectedProduct.gb);
        params.append('color', selectedProduct.selectedColor);
        params.append('qty', '1');
        params.append('img', selectedProduct.img);
        
        window.location.href = 'cart.php?' + params.toString();
    });
}

// Initialize confirm button event listener
document.addEventListener('DOMContentLoaded', function() {
    const confirmBtn = document.getElementById('confirmBtn');
    if (confirmBtn) {
        confirmBtn.addEventListener('click', function() {
            if (!selectedColor) {
                alert('Please select a color');
                return;
            }
            
            if (callbackFunction && currentProduct) {
                callbackFunction({
                    ...currentProduct,
                    selectedColor: selectedColor
                });
            }
            
            closeColorModal();
        });
    }
});
