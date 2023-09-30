// Check if there's a view count stored in local storage
let viewCount = localStorage.getItem('viewCount');

// If view count doesn't exist, set it to 0
if (!viewCount) {
    viewCount = 0;
}

// Increment the view count
viewCount = parseInt(viewCount) + 1;

// Update the view count in the HTML
document.getElementById('viewCount').textContent = viewCount;

// Store the updated view count in local storage
localStorage.setItem('viewCount', viewCount.toString());