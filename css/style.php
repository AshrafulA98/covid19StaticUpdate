<style type="text/css">

html{
    scroll-behavior: smooth;
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Mulish', sans-serif;
}

/* **********  Navbar *********** */

.nav_style{
    /* background-color: #a29bfe!important; */
    background-color: rgba(30, 30, 30, 0.85)!important;
}

.nav_style a{
    color: white;
}

.link_css:hover{
    color: #00A8FF!important;
}

.row{
    margin-left: 0!important;
    margin-right: 0!important;
}

/* ******* Main Header ****** */

.main_header{
    height: 450px;
    width: 100%;
}

.rightSide h1{
    font-size: 3rem;
}

.corona_roation img{
    animation: alam 3s linear infinite;
}

@keyframes alam{
    0% {transform: rotate(0);}
    100% {transform: rotate(360deg);}
}

#covid_border{
    border-radius: 50px;
}

.leftSide img{
    animation: ashraful 5s linear infinite;
}

@keyframes ashraful{
    0%{
        transform: scale(.75);
    }
    20%{
        transform: scale(1);
    }
    40%{
        transform: scale(.75);
    }
    60%{
        transform: scale(1);
    }
    80%{
        transform: scale(.75);
    }
    100%{
        transform: scale(.75);
    }

}


/* **************** Corona Latest Update **************  */


.corona_update{
    margin: 0 0 30px 0;
}

.corona_update h3{
    color: #ff7675;
}

.corona_update h1{
    font-size: 2rem;
    text-align: center;
}



 /* ************ About Section ************   */


.sub_section{
    background-color: #e1e1e3;
}

#aboutImg{
    border-radius: 15px;
}


/* ************* Footer Section *************  */

.footer_style{
    background-color: #a29bfe!important
}

.footer_style p{
    margin-bottom: 0!important;
    padding: 10px;
}


/* *************** top scroll button **************  */

#myBTN{
    display: none;
    position: fixed;
    bottom: 30px;
    right: 30px;
    z-index: 99;
    border: none;
    outline: none;
    background-color: #00A8FF;
    color: white;
    padding: 10px;
    border-radius: 10px;
}

#myBTN:hover{
    background: #606060;
}



/* ****************** Responsive ******************  */

@media(max-width:768px){
    .main_header{
        height: 700px;
        text-align: center;
    }

    .main_header h1{
        text-align: center;
        padding: 0;
        width: 100%;
        font-size: 34px;
    }

    .count_style{
        display: inline!important;
    }

    .count_style p{
        text-align: center;
    }

    .headerImg{
        margin-left: 0!important;
    }
}



</style>