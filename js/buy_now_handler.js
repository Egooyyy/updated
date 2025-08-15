// Buy Now Button Handler with Color Selection
document.addEventListener('DOMContentLoaded', function() {
    // Function to handle buy now clicks
    function handleBuyNowClick(productName, productId, price) {
        // Create color selection modal
        const colors = getProductColors(productName);
        
        if (colors && colors.length > 1) {
            showColorModal(productName, colors, productId, price);
        } else {
            // Single color or no color options
            redirectToBuyNow(productName, colors[0] || 'Default', productId, price);
        }
    }

    // Color selection modal
    function showColorModal(productName, colors, productId, price) {
        // Remove existing modal
        const existingModal = document.getElementById('color-modal');
        if (existingModal) existingModal.remove();

        // Create modal HTML
        const modal = document.createElement('div');
        modal.id = 'color-modal';
        modal.innerHTML = `
            <div class="modal-overlay">
                <div class="modal-content">
                    <h3>Select Color for ${productName}</h3
                    <div class="color-options">
                        ${colors.map(color => `
                            <label class="color-option">
                                <input type="radio" name="color" value="${color}" required>
                                <span>${color}</span>
                            </label>
                        `).join('')}
                    </div>
                    <div class="modal-buttons">
                        <button type="button" onclick="closeColorModal()">Cancel</button>
                        <button type="button" onclick="confirmColorSelection('${productName}', ${productId}, '${price}')">Continue</button>
                    </div>
                </div>
            </div>
        `;

        document.body.appendChild(modal);
    }

    // Close modal
    window.closeColorModal = function() {
        const modal = document.getElementById('color-modal');
        if (modal) modal.remove();
    };

    // Confirm color selection
    window.confirmColorSelection = function(productName, productId, price) {
        const selectedColor = document.querySelector('input[name="color"]:checked');
        
        if (!selectedColor) {
            showNotification('Please select a color variant', 'error');
            return;
        }

        closeColorModal();
        redirectToBuyNow(productName, selectedColor.value, productId, price);
    };

    // Redirect to buy now page
    function redirectToBuyNow(productName, color, productId, price) {
        const encodedName = encodeURIComponent(productName);
        const encodedColor = encodeURIComponent(color);
        window.location.href = `buy_now.php?add=${encodedName}&color=${encodedColor}&id=${productId}&price=${price}&qty=1`;
    }

    // Get product colors (mock function - replace with actual data)
    function getProductColors(productName) {
        const colorMap = {
            'Iphone 16 (512 GB)': ['Black', 'White', 'Blue', 'Pink', 'Natural Titanium', 'Yellow'],
            'Iphone 15 (128GB)': ['Black', 'Blue', 'Green', 'Yellow', 'Pink'],
            'Iphone 15 Pro Max (1TB)': ['Black', 'White', 'Blue', 'Natural'],
            'Iphone 16 Pro (128 GB)': ['Black Titanium', 'White Titanium', 'Blue Titanium', 'Natural Titanium'],
            'Iphone 16e (128 GB)': ['Blue', 'White', 'Green', 'Yellow', 'Red'],
            'Iphone 15 Pro (256 GB)': ['Black', 'White', 'Blue', 'Natural']
        };
        
        return colorMap[productName] || ['Default'];
    }

    // Show notification
    function showNotification(message, type = 'success') {
        const notification = document.createElement('div');
        notification.className = `notification ${type}`;
        notification.textContent = message;
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px 25px;
            border-radius: 8px;
            color: white;
            font-weight: bold;
            z-index: 9999;
            transition: all 0.3s ease;
            ${type === 'error' ? 'background: #dc3545;' : 'background: #28a745;'}
        `;
        
        document.body.appendChild(notification);
        
        setTimeout(() => {
            notification.style.opacity = '0';
            setTimeout(() => notification.remove(), 300);
        }, 3000);
    }

    // Add event listeners to all buy now buttons
    document.querySelectorAll('.buy-now-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const productName = this.dataset.product;
            const productId = this.dataset.id;
            const price = this.dataset.price;
            handleBuyNowClick(productName, productId, price);
        });
    });
});

// CSS for modal
const style = document.createElement('style');
style.textContent = `
    #color-modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 10000;
    }
    
    .modal-content {
        background: white;
        padding: 30px;
        border-radius: 10px;
        max-width: 400px;
        width: 90%;
        box-shadow: 0 4px 20px rgba(0,0,0,0.3);
    }
    
    .color-options {
        margin: 20px 0;
    }
    
    .color-option {
        display: block;
        margin: 10px 0;
        cursor: pointer;
    }
    
    .color-option input {
        margin-right: 10px;
    }
    
    .modal-buttons {
        display: flex;
        gap: 10px;
        justify-content: flex-end;
        margin-top: 20px;
    }
    
    .modal-buttons button {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    
    .modal-buttons button:first-child {
        background: #6c757d;
        color: white;
    }
    
    .modal-buttons button:last-child {
        background: #f26522;
        color: white;
    }
`;
document.head.appendChild(style);
