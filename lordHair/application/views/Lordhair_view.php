<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/images/favicon.png'); ?>">
    <title>Lordhair: Personalized Men's Hair Systems | Confidence Renewed</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Bree+Serif&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap');


:root {
    --accent-red:#ff1a00;
    --dark-bg: #212121; 
    --light-blue-bg: #4a90e2;
    --text-light: #ffffff;
    --text-dark: #333333;
    --primary-red: red;
    --dark-gray: #1e1e1f;

}
*{
 margin: 0;
 padding: 0;
 box-sizing: border-box;

}
body {
    margin: 0;
    font-family: "Bree Serif", "sans-serif", "Source Code Pro", "Lato", "PT sans";
    padding-top: 50px;
    line-height: 1.6;
    min-height: 2000px;
    overflow: visible;
    overflow-x: hidden;
    background-color: #1e1e1f;
    color: #fff;

}

.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 2rem;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}
.header-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 0;
}
.hide-header {
    transform: translateY(-100%);
    opacity: 0;
    pointer-events: none;
}

.top-bar a {
    text-decoration: none;
    color: inherit;

}

.top-bar {
    background-color: #212121; 
    color: #ffffff; 
    padding: 29px 90px; 
    display: flex;
    justify-content: space-between; 
    align-items: center;
    position: fixed;
    top: 0%;
    left: 0%;
    width: 100%;
    z-index: 1000;
    margin-bottom: 0;
    font-size: 0.9rem;
    transition: transform 0.3s ease;

    


}
.logo {
    height: 23%;
    width: 440px;
    display: block;
    position: fixed;
    top: -8px;
    left: 20px;
    margin-top: -50px;
    margin-left: -110px;
    padding: 5px;
    z-index: 1001;
    
 

}
    
.logo-img {
    height: 160px;
    width: auto;
    display: block;
    margin: auto;
    object-fit: contain;


}

.logo-link {
    display: flex;
    align-items: center;
    font-weight: bold;
    line-height: 0;
    text-decoration: none;
    position: relative;


}
.top-nav .nav__links {
    list-style: none; 
    padding: 0;
    margin: 0;
    display: flex;
    gap: 20px;
    align-items: center;
}
.nav__links {
    transition: 0.2s;
    padding: 0;

}
.top-nav .nav__links li {
    padding: 0;
}

.top-nav .nav__links li a {
    color: inherit; 
    font-size: 14px; 
    padding-top: 0;
    text-decoration: none; 
    display: flex;
    align-items: center;
    transition: color 0.2s ease; text-decoration: 0.2s ease;
    position: relative;

}
.top-nav .nav__links li a::after {
    content: '';
    position: absolute;
    width: 0;
    height: 1px;
    bottom: -2px;
    left: 0;
    background-color: #ffffff;
    transition: width 0.3s ease-out; 
 
}
.top-nav .nav__links li a:hover::after {
    width: 100%; 

}
.main-nav {
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: #212121;
    padding: 5px 60px; 
    font-family: sans-serif;
    font-weight: bold;
    position: fixed;
    top: 80px;
    left: 0;
    width: 100%;
    z-index: 999;
    transition: transform 0.3s ease;

}
.menu-links {
    list-style: none;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    padding: 2px;
    margin: 0;
    gap: 35px;
    line-height: 1px;
    flex-wrap: nowrap;
    transition: color 0.3s ease;
    margin: 0 auto;
    width: auto;
    white-space: nowrap;
    flex: 1;
    
}
.menu-links .special-color {
    color: var(--accent-red);
    font-weight: 900;
}
.menu-links li {
    display: flex;
    align-items: center;
    margin: 0 0;
}
.menu-links a {
    position: relative;
    text-decoration: none;
    color: white;
    font-weight: bold;
    letter-spacing: 0.5px;
    transition: color 0.3s ease;
    padding: 20px 10px;
    position: relative;
    overflow: hidden;
    text-transform: uppercase;
    border-radius: 3px;
}
.menu-links a:hover {
    color: #ffffff;
}
.menu-links .special-color:hover {
    color: #ffffff;

}
.sale-link {
    color: #212121;
}
.search-container {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-left: auto;
    flex-shrink: 0;
}
.search-box {
    display: flex;
    align-items: center;
    background-color: #fff;
    border-radius: 4px;
    padding: 13px 35px;
    width: 310px;
    cursor: pointer;
}
.search-box i {
    color: #555;
    margin-right: 8px;
}
.search-box input {
    border: none;
    outline: none;
    font-size: 14px;
    color: #333;
    width: 100%;
    cursor: pointer;
}

.icon-links {
    display: flex;
    align-items: center;
    gap: 18px;

}
.icon-links a {
    color: white;
    font-size: 18px;
    position: relative;
    transition: color 0.3s ease;
}
.icon-links a:hover {
    color: #ffffff;
}
.cart-icon {
    position: relative;
}
.cart-count {
    position: absolute;
    top: -8px;
    right: -10px;
    background-color: #ff1a00;
    color: white;
    font-size: 10px;
    font-weight: bold;
    padding: 1px 5px;
    border-radius: 50%;
}
.underline-link {
    text-decoration-line: underline !important; 
    text-decoration-thickness: 1px;
    transition-duration: 4s ease-out;

}
.top-nav .nav__links li a i {
    margin-right: 4px; 
    font-size: 18px; 
}
.fa-circle-phone, .fa-circle-dollar-to-slot, .fa-globe {
    font-size: 16px; 
}

@media (max-width: 900px) {
    .top-bar, .main-nav {
        flex-direction: column;
        align-items: center;
        gap: 5px;
        
    }

}
.hair-link:hover {
    background-color: black;
    text-decoration: none;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    width: 100%;
    transition: 0.2s;
}
.hair-link::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%; 
    height: 1px; 
    background-color: #ff1a00; 
    transform: scaleX(0);
    transition: 0.4s ease-out; 
    border-radius: 50px;
}
.hair-link:hover::after {
    transform: translateY(0); 
}
.custom-link:hover {
    background-color: black;
    text-decoration: none;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    width: 100%;
    transition: 0.2s;
}
.custom-link::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%; 
    height: 1px; 
    background-color: #ff1a00; 
    transform: scaleX(0); 
    transition: 0.4s ease-out; 
    border-radius: 50px;
}
.custom-link:hover::after {
    transform: translateY(0); 
}
.accessories-link:hover:hover {
    background-color: black;
    text-decoration: none;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    width: 100%;
    transition: 0.2s;
}
.accessories-link::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 1px; 
    background-color: #ff1a00;
    transform: scaleX(0); 
    transition: 0.4s ease-out; 
    border-radius: 50px;
}
.accessories-link:hover::after {
    transform: translateY(0); 
}
.hair-maintenance-link:hover:hover {
    background-color: black;
    text-decoration: none;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    width: 100%;
    transition: 0.2s;
}
.hair-maintenance-link::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%; 
    height: 1px; 
    background-color: #ff1a00; 
    transform: scaleX(0); 
    transition: 0.4s ease-out;
    border-radius: 50px;
}
.hair-maintenance-link:hover::after {
    transform: translateY(0); 
}
.help-link:hover {
    background-color: black;
    text-decoration: none;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    width: 100%;
    transition: 0.2s;
}
.help-link::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%; 
    height: 1px; 
    background-color: #ff1a00; 
    transform: scaleX(0); 
    transition: 0.4s ease-out; 
    border-radius: 50px;
}
.help-link:hover::after {
    transform: translateY(0); 
}
.about-link:hover {
    background-color: black;
    text-decoration: none;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    width: 100%;
    transition: 0.2s;
}
.about-link::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%; 
    height: 1px; 
    background-color: #ff1a00; 
    transform: scaleX(0);
    transition: 0.4s ease-out; 
    border-radius: 50px;
}
.about-link:hover::after {
    transform: translateY(0); 

}
.special-color {
    color: var(--text-light);
}
.special-color:hover {
    background-color: black;
    text-decoration: none;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    width: 100%;
    transition: 0.2s;
}
.special-color::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%; 
    height: 1px;
    background-color: #ff1a00; 
    transform: scaleX(0); 
    transition: 0.4s ease-out; 
    border-radius: 50px;
    
}
.special-color:hover::after {
    transform: translateY(0); 
    
}
.special-color-item {
    order: 1;
}
.special-color{
    color: #ffffff;

}
.hero-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    background-repeat: no-repeat;
}
.hero-image-container {
    background-image: url('<?php echo base_url('assets/images/image3.png'); ?>');
    object-fit: cover;
    height: 985px;
    width: 1700px;
    background-position: 50% center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    padding-top: 0px;
    margin-left: 0;
    margin-top: 0px;
 
}
.hero-content-overlay {
    position: absolute;
    bottom: 20%;
    top: 5%;
    left: 5%;
    width: 50%;
    z-index: 10;
    color: white;
    font-family: sans-serif;
    font-size: 3rem;
    padding: 10px;
    margin-bottom: 10px;


}
.hero-content-overlay h1 {
    position: relative;
    top: 10%;
    font-size: 3rem;
    font-weight: 600;
    margin-bottom: 30px;
    line-height: 90px;
    padding: 50px;
    line-height: 1.4;
    margin-bottom: 5px;
    margin-left: 0;
    padding-left: 0;
    margin-top: 90px;

}
.subtitle {
    top: 20%;
    left: 60%;
    width: 90%;
    font-weight: 400;
    font-size: 1.2rem;
    line-height: 1.2;
    margin-top: 80px;
    margin-bottom: 5px;
    margin-left: 0;
  
}
.offer-details {
    margin-top: 5px;
    font-size: 3rem;
    font-weight: 200 bold;
    margin-bottom: 25px;
}
.price-off {
    font-size: 3rem;
    color: var(--accent-red);
    font-weight: 700;
    margin-bottom: 5px;
    margin-top: -90px;
}
.codes {
    font-size: 1rem;
    margin-bottom: 15px;
}
.dates {
    font-size: 0.9rem;
    margin-bottom: 15px;
}
.shop-now-hero-btn {
    background-color: var(--accent-red);
    color: white;
    border: none;
    padding: 15px 50px;
    font-size: 1.1rem;
    font-weight: bold;
    cursor: pointer;
    text-transform: uppercase;
    transition: background-color 0.2s;
    margin-top: 5px;
    margin-bottom: 20px;
    border-radius: 4px;
}
.shop-now-hero-btn:hover {
    background-color: #cc2900;
    box-sizing: border-box;



}
.left-image-container {
    background-image: url('<?php echo base_url('assets/images/image4.jpg'); ?>');
    object-fit: cover;
    height: 800px;
    width: 100%;
    left: 0;
    margin: 0;
    padding: 0;
    background-position: 50% center;
    background-repeat: no-repeat;
    background-size: 120%;
    display: flex;
    position: relative;
    padding-top: 3px;
    margin-left: -363px;
    margin-top: 105px;
    border-radius: 6px;
 
}
.left-content-overlay {
    position: absolute;
    bottom: 5px;
    top: 3px;
    left: 290px;
    width: 40%;
    z-index: 10;
    color: white;
    font-family: sans-serif;
    font-size: 3rem;
    margin-top: -80px;


}
.left-content-overlay h1 {
    position: relative;
    top: 130px;
    font-size: 1rem;
    font-weight: 5px;
    margin-bottom: 0px;
    line-height: 9px;
    padding: 20px;
    line-height: 1.4;
    margin-left: 0;
    padding-left: 0;

}
.left-content-overlay h2 {
    position: relative;
    top: 100px;
    margin-top: 0;
    font-size: 1rem;
    font-weight: 5px;
    margin-bottom: 5px;
    line-height: 80px;
    padding: 20px;
    line-height: 1.4;
    margin-left: 0;
    padding-left: 0;
}
.offer-details {
    margin-top: 110px;
    font-size: 3rem;
    font-weight: 200 bold;
    margin-bottom: 5px;
}
.price-off {
    font-size: 3rem;
    color: var(--accent-red);
    font-weight: 700;
    margin-bottom: 5px;
}
.codes {
    font-size: 1rem;
    margin-bottom: 15px;

}
.shop-now-left-btn {
    background-color: var(--dark-gray);
    color: white;
    border: none;
    padding: 15px 100px;
    font-size: 1.1rem;
    font-weight: bold;
    cursor: pointer;
    text-transform: uppercase;
    transition: background-color 0.2s;
    margin-top: 300px;
    border-radius: 4px;
}
.shop-now-left-btn:hover {
    background-color: #f01e00;
    box-sizing: border-box;


}
.middle-image-container {
    background-image: url('<?php echo base_url('assets/images/image5.jpg'); ?>');
    object-fit: contain;
    object-position: center;
    height: 555px;
    width: 550px;
    left: -10px;
    margin: 0;
    padding: 0;
    background-position: 90% center;
    background-repeat: no-repeat;
    background-size: -50% contain;
    position: relative;
    padding-top: 3px;
    margin-left: 557px;
    margin-top: -537px;
    border-radius: 6px;
 

}
.middle-content-overlay {
    position: absolute;
    bottom: 5px;
    left: 40px;
    margin-top: -90px;
    width: 70%;
    z-index: 10;
    color: white;
    font-family: sans-serif;
    margin-bottom: 5px;
    top: 40px;
   
}
.middle-content-overlay h1 {
    position: relative;
    top: -65px;
    font-size: 1rem;
    font-weight: 5px;
    margin-bottom: 0px;
    line-height: 9px;
    padding: 20px;
    line-height: 1.7;
    margin-left: 0;
    margin-top: 10px;
    padding-left: 0;
    top: 45px;

}
.middle-content-overlay h2 {
    position: relative;
    top: 5px;
    margin-top: 0;
    font-size: 1rem;
    font-weight: 5px;
    margin-bottom: -90px;
    line-height: 80px;
    padding: 20px;
    line-height: 1.4;
    margin-left: 0;
    padding-left: 0;
}
.middle-offer-details {
    margin-top: 100px;
    font-size: 1rem;
    font-weight: 100 bold;
    margin-bottom: 5px;
}

.middle-price-off {
    font-size: 3rem;
    font-weight: 700;
    margin-bottom: 5px;
    margin-top: 12px;
    line-height: 2px;
}
.codes {
    font-size: 1rem;
    margin-bottom: 15px;

}
.shop-now-middle-btn {
    background-color: var(--accent-red);
    color: white;
    border: none;
    padding: 15px 100px;
    font-size: 1.1rem;
    font-weight: bold;
    cursor: pointer;
    text-transform: uppercase;
    transition: background-color 0.2s;
    margin-top: 297px;
    margin-bottom: 5px;
    border-radius: 4px;
    margin-left: -15px;
}
.shop-now-middle-btn:hover {
    background-color: #aa1c06;
    box-sizing: border-box;
}


.right-image-container {
    background-image: url('<?php echo base_url('assets/images/image6.jpg'); ?>');
    object-fit: contain;
    object-position: center;
    height: 552px;
    width: 565px;
    left: -10px;
    margin: 0;
    padding: 0;
    background-position: 70% center;
    background-repeat: no-repeat;
    background-size: -50% contain;
    position: relative;
    padding-top: 3px;
    margin-left: 525px;
    margin-top: -537px;
    border-radius: 6px;
 

}
.right-content-overlay {
    position: absolute;
    left: 40px;
    width: 70%;
    z-index: 10;
    color: white;
    font-family: sans-serif;
    margin-bottom: 5px;
    margin-top: -80px;
    top: 105px;

}
.right-content-overlay h1 {
    position: relative;
    top: -40px;
    font-size: 1rem;
    font-weight: 5px;
    margin-bottom: 0px;
    padding: 20px;
    line-height: 1.4;
    margin-left: 0;
    padding-left: 0;
    margin-top: 20px;

}
.right-content-overlay h2 {
    position: relative;
    top: -70px;
    margin-top: 0;
    font-size: 1rem;
    font-weight: 5px;
    margin-bottom: -165px;
    padding: 20px;
    line-height: 1.4;
    margin-left: 0;
    padding-left: 0;
}
.right-offer-details {
    margin-top: -50px;
    font-size: 3rem;
    font-weight: 200 bold;
    bottom: 80px;
 
}
.shop-now-right-btn {
    background-color: var(--dark-gray);
    color: white;
    border: none;
    padding: 15px 100px;
    font-size: 1.1rem;
    font-weight: bold;
    cursor: pointer;
    text-transform: uppercase;
    transition: background-color 0.2s;
    margin-top: 305px;
    margin-bottom: 10px;
    border-radius: 4px;
    margin-left: -15px;

}
.shop-now-right-btn:hover {
    background-color: #f01e00;
    box-sizing: border-box;

}
.your-hair-your-style-container {
    position: relative; 
    min-height: 500px; 
    width: 100%;
    background-size: cover;
    background-position: center;
    padding-bottom: 80px; 
}
.image-1 {
    background-image: url('<?php echo base_url('assets/images/image1.png'); ?>');
    object-fit: contain;
    object-position: center;
    height: 620px;
    width: 850px;
    left: 10px;
    margin: 0;
    padding: 40px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding-top: 3px;
    margin-left: -1140px;
    margin-top: 555px;
    border-radius: 0;



 

}
.image-1 h1 {
    position: relative;
    font-size: 3.5rem;
    font-weight: 200px;
    margin-bottom: 15px;
    margin-top: 120px;
    padding: 20px;
    line-height: 1.4;
    margin-left: 40px;
    padding-left: 0;



}
.image-1 h2 {
    position: relative;
    font-size: 1rem;
    font-weight: 1px;
    margin-bottom: 0px;
    margin-top: 20px;
    padding: 20px;
    line-height: 1.4;
    margin-left: 50px;
    padding-left: 0;
    max-width: 600px;

}
.button-container {
    position: absolute;
    margin-top: 60px;
    bottom: 30px; 
    left: 50%; 
    transform: translateX(-50%); 
    display: flex;
    gap: 15px; 
}
.image-1-btn {
    background-color: var(--accent-red);
    color: white;
    padding: 20px 100px;
    position: relative;
    top: -90px;
    font-size: 1.2rem;
    font-weight: bold;
    cursor: pointer;
    text-transform: uppercase;
    transition: background-color 0.3s;
    border-radius: 4px;
    margin-left: -1330px;
    border: none;

}
.image-1-btn:hover {
    background-color: #fd4a2f;
    box-sizing: border-box;
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}
.online-1-btn {
    background-color: #ffffff;
    color: rgb(0, 0, 0);
    position: relative;
    top: -90px;
    border: 2px solid #ddd;
    padding: 15px 50px;
    font-size: 1.2rem;
    font-weight: bold;
    cursor: pointer;
    text-transform: uppercase;
    transition: background-color 0.3s;
    margin-left: 10px;
    border-radius: 4px;
    
}
.online-1-btn:hover {
    background-color: #c5c5c5;
    border-color: #bbb;
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}
/* Responsive adjustments */
        @media (max-width: 768px) {
            .image-1 {
                height: 350px;
                padding: 30px;
            }
            
            .image-1 h1 {
                font-size: 2rem;
            }
            
            .image-1 h2 {
                font-size: 1rem;
            }
            
            .button-container {
                flex-direction: column;
                width: 80%;
                bottom: 20px;
            }
            
            .image-1-btn,
            .online-1-btn {
                width: 100%;
                text-align: center;
                margin-top: -130px;
            }
        }

.slideshow-container {
    postion: relative;
    object-fit: contain;
    width: 842px; 
    height: 620px;
    position: relative;
    min-height: 500px;
    background-size: cover;
    background-position: center;
    justify-content: center;
    margin: 0;
    overflow: hidden; 
    border: 0;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 0;
    margin-top: -700px;
    margin-left: -280px;
}

.slide-track {
    display: flex; 
    width: 400%; 
    animation: slide-animation 16s ease-in-out infinite; 
}

.slide-track img {
    width: 25%; 
    height: 600px;
    margin: 0;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    display: block;
    height: auto; 
}

@keyframes slide-animation {
    0%   { margin-left: 0; }
    20%  { margin-left: 0; } 
    
    25%  { margin-left: -100%; } 
    45%  { margin-left: -100%; } 
    
    50%  { margin-left: -200%; } 
    70%  { margin-left: -200%; } 
    
    75%  { margin-left: -300%; } 
    95%  { margin-left: -300%; } 
    
    100% { margin-left: -400%; } 
}
@media (max-width: 768px) {
    .your-hair-your-style-container {
        flex-direction: column; 
    }

    .slideshow-container {
        border-right: none;
        border-bottom: 1px solid #eee; 
    
    }
}
.guarantees-container {
            background-color: #fff;
            padding: 75px 600px;
            margin-top: -0px;
            margin-left: -1130px;
            border-radius: 0;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .guarantees-container h2 {
            text-align: center;
            margin-bottom: 59px;
            margin-top: -55px;
            margin-left: -550px;
            color: #000000;
            font-size: 52px;
            white-space: nowrap;
        }
        .plane {
            display: flex;
            justify-content: center;
            gap: 1px;
            flex-direction: flex-start;
            margin-left: -175px;
        
        }
        .plane i {
            font-size: 50px;
            color: #000000;
            margin-bottom: 0;
            margin-left: -1350px;
            text-align: center;
            min-width: 210px;
            flex-shrink: 0;
        }
        .plane h3 {
            font-size: 22px;
            line-height: 1.2;
            margin: 0;
            color: #000000;
            white-space: nowrap;
            margin-left: -65px;
            
        
        }
        .calendar {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-direction: flex-start;
            margin-top: -50px;
            margin-left: -1080px;

        }
        .calendar i {
            font-size: 50px;
            color: #000000;
            margin-bottom: 0;
            margin-left: 0;
            text-align: center;
            min-width: 210px;
            flex-shrink: 0;
        }
        .calendar h3 {
            font-size: 22px;
            line-height: 1.2;
            margin: 0;
            color: #000000;
            white-space: nowrap;
            margin-left: -80px;
        }
        .shield {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-direction: flex-start;
            margin-top: -49px;
            margin-left: -635px;

        }
        .shield i {
            font-size: 50px;
            color: #000000;
            margin-bottom: 0;
            margin-left: 0;
            text-align: center;
            min-width: 210px;
            flex-shrink: 0;
        }
        .shield h3 {
            font-size: 22px;
            line-height: 1.2;
            margin: 0;
            color: #000000;
            white-space: nowrap;
            margin-left: -70px;
        
        }
        .note {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-direction: flex-start;
            margin-top: -50px;
            margin-left: -150px;

        }
        .note i {
            font-size: 50px;
            color: #000000;
            margin-bottom: 0;
            margin-left: 0;
            text-align: center;
            min-width: 210px;
            flex-shrink: 0;
        }
        .note h3 {
            font-size: 22px;
            line-height: 1.2;
            margin: 0;
            color: #000000;
            white-space: nowrap;
            margin-left: -90px;
        
        }
        .men {
            display: flex;
            font-size: 1rem;
            font-weight: normal;
            line-height: 1.5;
            width: 700px;
            margin: 0;
            color:rgb(0, 0, 0);
            margin-left: 400px;
            overflow: hidden;
            margin-top: -80px;
        }
        
        
        
        
</style>

<body>
    <header class="top-bar">
        <a href="#" class="logo-link">
          <img class="logo" img src="<?php echo base_url('assets/images/lhlogo.png'); ?>"  alt="logo">
        </a>
   
 </div>
        <nav class="top-nav">
            <ul class="nav__links">
                <li><a href="#" class="underline">Get $100</a></li>
                <li><a href="#" class="underline">Lordhair Club</a></li>
                <li><a href="#">Feedback</a></li>
                <li>
                    <a href="#"> 
                        <i class="fa-solid fa-phone-volume"></i> 
                        Contact Us
                    </a>
                </li>
                <li><a href="#"><i class="fas fa-dollar-sign"></i> USD</a></li>
                <li><a href="#"><i class="fas fa-globe"></i> English</a></li>
            </ul>
        </nav>
    </header>
    
    <nav class="main-nav">
        <ul class="menu-links">
            <li><a href="#" class="hair-link">HAIR SYSTEMS</a></li>
            <li><a href="#" class="custom-link">CUSTOM</a></li>
            <li><a href="#" class="accessories-link">ACCESSORIES</a></li>
            <li><a href="#" class="hair-maintenance-link">HAIR MAINTENANCE</a></li>
            <li><a href="#" class="help-link">HELP</a></li>
            <li><a href="#" class="about-link">ABOUT US</a></li>
            <li><a href="#" class="special-color">SALE</a></li>
        </ul>

        <div class="search-container">
            <div class="search-box">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" readonly placeholder="Search">
            </div>

        <div class="icon-links">
            <a href="#"><i class="fa-regular fa-heart"></i></a>
            <a href="#"><i class="fa-regular fa-user"></i></a>
            <a href="#" class="cart-icon">
                <i class="fa-solid fa-bag-shopping"></i>
                <span class="cart-count">0</span>
            </a>
        </div>
        </div>
    </nav>

    
    <div class="hero-image-container">
        <div class="hero-content-overlay">
        <h1>Black Friday <br> - Step Into Confidence</h1>
        <p class="subtitle">All Hair Systems</p>

        <div class="offer-details">
        <p class="price-off">$45 OFF 1 | $100 OFF 2</p>
        <p class="codes">CODE: BF45 | CODE: BF100</p>
        <p class="dates">Nov 1-6</p>
        </div>

       <button class="shop-now-hero-btn">SHOP NOW</button>
    
    <div class="left-image-container">
        <div class="left-content-overlay">
        <h1>Ideal for first time Wearers</h1>
        <h2>$50 OFF SuperSkin-V <br> $65 OFF ZyroSen SuperSkin-V</h2>

        <div class="offer-details">
        <p class="dates">Nov 1-6</p>
        </div>

       <button class="shop-now-left-btn">SHOP NOW</button>
    
    
    <div class="middle-image-container">
        <div class="middle-content-overlay">
        <h1>Drying, Shedding, Tangling? <br> 3R- Maintenance Kit</h1>
        <div class="middle-price-off">
        <h2>$79.9 with Any Hair System <br> or 20% OFF When Bought Alone</h2>

        <div class="offer-details">
        <p class="dates">Nov 1-6</p>
        </div>
       <button class="shop-now-middle-btn">SHOP NOW</button>

    <div class="right-image-container">
        <div class="right-content-overlay">
        <h1>Drying, Shedding, Tangling? <br> 3R- Maintenance Kit</h1>
        <h2>$79.9 with Any Hair System <br> or 20% OFF When Bought Alone</h2>

        <div class="offer-details">
        <p class="dates">Nov 1-6</p>
        </div>
        <button class="shop-now-right-btn">SHOP NOW</button>
        </div>
    
     <div class="your-hair-your-style-container">
        <div class="image-1">
        <h1>Your Hair, Your Style, <br> Your Way</h1>
        <h2>Expert-crafted hair systems that let you look and feel like yourself <br> again. Natural, undetectable, and designed for your lifestyle.</h2>
        </div>
        <div class="button-container">
        <button class="image-1-btn">SHOP NOW</button>
        <a href="<?php echo base_url('booking'); ?>">
    <button class="online-1-btn">ONLINE CONSULTATION</button>
</a>
        </div>
     </div>


    <div class="container">
        <div class="slideshow-container">
            <div class="slide-track">
                 <img src="<?php echo base_url('assets/images/slide-1.jpg'); ?>">
                 <img src="<?php echo base_url('assets/images/slide-2.jpg'); ?>">
                 <img src="<?php echo base_url('assets/images/slide-3.jpg'); ?>">
                 <img src="<?php echo base_url('assets/images/slide-4.jpg'); ?>">
            </div>
            </div>
        </div>

    

         <section class="guarantees-container">
        <div class="container">
            <h2>Premium Hair Replacement for Men</h2>
        </div>

         <div class="plane">
            <i class="fa-sharp fa-solid fa-plane"></i>
            <h3>Free <br> Shipping</h3>
        </div> 

        <div class="calendar">
            <i class="fas fa-calendar-check"></i>
            <h3>30-day <br> Money-back</h3>
        </div>

        <div class="shield">
            <i class="fa-solid fa-shield-heart"></i>
            <h3>Secure <br> Payment</h3>
        </div>

         <div class="note">
            <i class="fas fa-clipboard-list"></i>
            <h3>First Purchase <br> Assurance</h3>
        </div>

         <div class="men">
            <h3>Premium hair systems designed for the modern man. Our specialized hair <br> replacement for men solutions deliver natural, undetectable results. Trust <br> our expert-crafted men's hairpieces to help you look and feel your best.</h3>
        </div>


</body>
</html>
    
</div>

</body>
</html>
