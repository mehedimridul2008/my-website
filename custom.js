// Mobile Navigation
const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');
        
hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('active');
    hamburger.innerHTML = navLinks.classList.contains('active') ? 
        '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
});

// Close mobile menu when clicking on a link
document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => {
        navLinks.classList.remove('active');
        hamburger.innerHTML = '<i class="fas fa-bars"></i>';
    });
});

// Smooth Scrolling for Navigation Links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        
        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);
        
        window.scrollTo({
            top: targetElement.offsetTop - 80,
            behavior: 'smooth'
        });
    });
});

// Back to Top Button
const backToTopBtn = document.querySelector('.back-to-top');
        
window.addEventListener('scroll', () => {
    if (window.pageYOffset > 300) {
        backToTopBtn.classList.add('active');
    } else {
        backToTopBtn.classList.remove('active');
    }
});

backToTopBtn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

// Animation on Scroll
const animateOnScroll = () => {
    const timelineItems = document.querySelectorAll('.timeline-item');
    const galleryItems = document.querySelectorAll('.gallery-item');
    
    timelineItems.forEach(item => {
        const itemPosition = item.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;
        
        if (itemPosition < windowHeight - 100) {
            item.classList.add('animated');
        }
    });
    
    galleryItems.forEach(item => {
        const itemPosition = item.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;
        
        if (itemPosition < windowHeight - 100) {
            item.classList.add('animated');
        }
    });
};

window.addEventListener('scroll', animateOnScroll);
window.addEventListener('load', animateOnScroll);

// Sticky Header on Scroll
const header = document.querySelector('header');

window.addEventListener('scroll', () => {
    if (window.pageYOffset > 100) {
        header.style.padding = '0.5rem 5%';
        header.style.background = 'rgba(106, 90, 205, 0.95)';
    } else {
        header.style.padding = '1rem 5%';
        header.style.background = 'linear-gradient(135deg, var(--primary-color), var(--secondary-color))';
    }
});

// Welcome Notification
const welcomeNotification = document.querySelector('.welcome-notification');
const closeBtn = document.querySelector('.close-btn');

// Show notification after 2 seconds
setTimeout(() => {
    welcomeNotification.classList.add('show');
}, 2000);

// Close notification
closeBtn.addEventListener('click', () => {
    welcomeNotification.classList.remove('show');
});

// Auto-hide notification after 10 seconds
setTimeout(() => {
    welcomeNotification.classList.remove('show');
}, 10000);

// Show notification when scrolling down
let lastScrollPosition = 0;
window.addEventListener('scroll', () => {
    const currentScrollPosition = window.pageYOffset;
    
    if (currentScrollPosition > lastScrollPosition && currentScrollPosition > 300) {
        welcomeNotification.classList.add('show');
    }
    
    lastScrollPosition = currentScrollPosition;
});

// Current Date and Time
function updateDateTime() {
    const now = new Date();
    
    // Bengali month names
    const bengaliMonths = [
        "জানুয়ারী", "ফেব্রুয়ারী", "মার্চ", "এপ্রিল", 
        "মে", "জুন", "জুলাই", "আগস্ট", 
        "সেপ্টেম্বর", "অক্টোবর", "নভেম্বর", "ডিসেম্বর"
    ];
    
    // Bengali day names
    const bengaliDays = [
        "রবিবার", "সোমবার", "মঙ্গলবার", "বুধবার", 
        "বৃহস্পতিবার", "শুক্রবার", "শনিবার"
    ];
    
    // Format date
    const day = bengaliDays[now.getDay()];
    const date = now.getDate();
    const month = bengaliMonths[now.getMonth()];
    const year = now.getFullYear();
    
    document.getElementById('current-date').textContent = `${day}, ${date} ${month} ${year}`;
    
    // Format time
    let hours = now.getHours();
    const minutes = now.getMinutes().toString().padStart(2, '0');
    const seconds = now.getSeconds().toString().padStart(2, '0');
    const ampm = hours >= 12 ? 'PM' : 'AM';
    
    hours = hours % 12;
    hours = hours ? hours : 12; // the hour '0' should be '12'
    
    document.getElementById('current-time').textContent = `${hours}:${minutes}:${seconds} ${ampm}`;
    
    // Update Islamic date (approximation)
    const islamicDate = getIslamicDate(now);
    document.getElementById('islamic-date').textContent = `হিজরি: ${islamicDate}`;
    
    // Update current year in footer
    document.getElementById('current-year').textContent = now.getFullYear();
}

// Simple Islamic date approximation
function getIslamicDate(gregorianDate) {
    const islamicMonths = [
        "মুহররম", "সফর", "রবিউল আউয়াল", "রবিউস সানি", 
        "জমাদিউল আউয়াল", "জমাদিউস সানি", "রজব", "শাবান", 
        "রমজান", "শাওয়াল", "জিলকদ", "জিলহজ"
    ];
    
    // This is a very rough approximation
    const islamicYear = Math.floor((gregorianDate.getFullYear() - 622) * (33 / 32));
    const islamicMonth = islamicMonths[gregorianDate.getMonth()];
    const islamicDay = gregorianDate.getDate();
    
    return `${islamicDay} ${islamicMonth} ${islamicYear}`;
}

// Update date and time every second
setInterval(updateDateTime, 1000);
updateDateTime(); // Initial call

// Visitor Counter
document.getElementById('visitor-count').textContent = mhmridulData.visitorCount;

// Preload images
window.addEventListener('load', function() {
    const images = ['<?php echo get_template_directory_uri(); ?>/images/shishu_loj.jpg'];
    images.forEach(img => {
        const image = new Image();
        image.src = img;
    });
});