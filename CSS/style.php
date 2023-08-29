<style type="text/css">

  html{
    scroll-behavior:smooth;
}
*{
    margin:0;
    padding:0;
    box-sizing: border-box;
    font-family: 'Mulish', sans-serif;
}
.row{
    margin-left: 0!important;
    margin-right: 0!important;
}
.nav_style{
    background-color: black;
}
.nav_style a{
    color: white;
}
 /* main header wali css */
 .main_header{
    height: 450px;
    width: 100%;
 }
 .rightside h1{
    font-size: 3rem;
 }
 .rightside img{
    animation: gocorona 3s linear infinite;
 }
 @keyframes gocorona{
    
    0% {transform: rotate(0);}
    100% {transform: rotate(360deg);}
 }
 .leftside img{
    animation:heartbeat 5s linear infinite;
}
@keyframes heartbeat{
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
        transform: scale(1);
    }
}
/* yha se jo updates hn wha pr CSS lgegi */
.corona_update{
    margin: 0 0 30px 0;

}
.corona_update h3{
    color:#ff7675;
}
.corona_update h1{
    font-size: 2rem;
    text-align: center;
}
.sub_section{
    background-color: #fbfafd;
}
/* footer ki baari */
.footer_style{
    background-color: black;
    color: white;
}
.footer_style p{
    margin-bottom: 0!important;
} 
#myBtn{
    display: none;
    position: fixed;
    bottom: 30px;
    right: 40px;
    z-index: 99;
    border: none;
    outline: none;
    background-color: #00A8FF;
    color: white;
    cursor: pointer;
    padding: 10px;
    border-radius: 10px;
}
#myBtn:hover {
    background: #606060;
}
/* responsove media query */
@media (max-width:768px)
{
    .main_header{height:700px; text-align: center;}
    .main_header h1{
        text-align:center;
        padding:0;
        width:100%;
        font-size:37px; }


        .coutn_stytle{
           display: inline!important;
        }
        .coutn_stytle p{
            text-align:center;
        }
}
</style>