<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodie</title>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

p{
    font-weight: 300;
    color: #111;
}

img{
    height: 100%;
    width: 100%;
    object-fit: cover;
}

span{
    color: red;
}

.logo{
    color: #fff;
    font-weight: 700;
    font-size: 2.3em;
    text-decoration: none;
}

#tong{
    width: 100%;
    height: 100%;
}

#tren
{
    position: fixed;
    height: 15%;
    width: 100%;
    padding: 10px 10px;
    padding-left: 30px;
    z-index: 1000;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color:rgb(114, 114, 114);
    transition: 0.2s ease-in;
    border-radius: 1px;
}

#tren img{
    height: 25px;
    width: 25px;
}



#tren .navigation{
    display: flex;
}

#tren .navigation li{
    list-style: none;
    margin-left: 30px;
}

#tren .navigation li a{
    text-decoration: none;
    color: #fff;
}
#tren .navigation li a:hover{
    color: red;
}


#giua{
    padding-top: 100px;
    width: 100%;
    height: 70%;
    background-color: pink;
}

#giua .items{
    display: grid;
    grid-template-columns: repeat(4,1fr);
    padding: 20px 10px;
    grid-column-gap: 20px;
    grid-row-gap: 30px;
}
#giua .items img{
    width: 100%;
    height: 300px;
    object-fit: cover;
    cursor: pointer;
    transition: 0.2s ease;
    border: round;
}

#giua .items img:hover{
    transform:scale(1.03) ;
}

#giua .items h4{
    padding: 5px;
    text-align: center;

}
#giua .items button{
    padding: 5px;
    border: none;
    outline: none;
    background-color: green;
    color: white;
    cursor: pointer;
    border-radius: 4px;
    font-size: 20px;
    display: block;
    margin: 0 auto;
    transition: 0.2s all;
}

#giua .items button:hover{
    transform: scale(1.03);
}
#giua .title {
    padding-left: 50px;
    font-family: sans-serif;
    padding-top: 10px;
    text-decoration: none;
    font-size: 2em;
    color: black;
    font-style: normal;
}


#giua {
    background-color: rgba(241, 151, 151, 0.4);

}



#giua h3{
    justify-content: center;
    align-items: center;
    display: flex;
    padding-bottom: 20px;
    padding-top: 1px;
}


#giua .btns{

    position: relative;
    justify-content: center;
    align-items: center;
    font-size: 1em;
    color: #fff;
    background: #ff0157;
    display: inline-flex;
    padding: 10px 30px;
    margin-top: 20px;
    text-transform: uppercase;
    text-decoration: none;
    letter-spacing: 2px;
    transition: 0.5s;
    margin-bottom: 25px;
}

#giua .btns:hover{
    transform:scale(1.03)
}

#duoi
{
    height: 15%;
    width: 100%;
    padding: 10px 10px;
    padding-left: 30px;
    align-items: center;
    background-color:rgba(0, 0, 0, 0.5);
    transition: 0.2s ease-in;
    border-radius: 1px;
    text-align: center;
    flex-direction: column;
    
}
#duoi ul{
    list-style: none;
    display: inline-flex;
}
#duoi ul li a img{   
    height: 40px;
    width: 40px;
    margin-left: 15px;
}

    </style>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div id="tong">
        <?php include 'menu.php' ?>

        <div id="giua">
            <h4 class="title">Đồ ăn</h4>
            <div class="items">
                <div>
                    <img src="./img/pexels-lisa-1279330.jpg" alt="">
                    <h4>Pasta</h4>
                    <button>Order</button>
                </div>
                <div>
                    <img src="./img/pexels-kasumi-loffler-3535383.jpg" alt="">
                    <h4>Steak</h4>
                    <button>Order</button>
                </div>
                <div>
                    <img src="./img/pexels-nerfee-mirandilla-3186654.jpg" alt="">
                    <h4>Thịt nướng</h4>
                    <button>Order</button>
                </div>
                <div>
                    <img src="./img/pexels-elli-1854652.jpg" alt="">
                    <h4>Bánh ngọt</h4>
                    <button>Order</button>
                </div>
            </div>
            <h3><a href="#" class="btns">View All</a></h3>
            <h4 class="title">Đồ uống</h4>
            <div class="items">

                <div>
                    <img src="./img/pexels-bella-white-1289247.jpg" alt="">
                    <h4>Nước dâu ép</h4>
                    <button>Order</button>
                </div>
                <div>
                    <img src="./img/pexels-chevanon-photography-312418.jpg" alt="">
                    <h4>Cafe</h4>
                    <button>Order</button>
                </div>
                <div>
                    <img src="./img/pexels-isabella-mendes-338713.jpg" alt="">
                    <h4>Nước cam ép</h4>
                    <button>Order</button>
                </div>
                <div>
                    <img src="./img/pexels-bruno-scramgnon-1337825.jpg" alt="">
                    <h4>Nước dưa hấu ép</h4>
                    <button>Order</button>
                </div>

            </div>
            <h3><a href="#" class="btns">View All</a></h3>
            <h4 class="title">Đồ chay</h4>
            <div class="items">
                <div>
                    <img src="./img/chay1.jpg" alt="">
                    <h4>Đậu sốt cà chua</h4>
                    <button>Order</button>
                </div>
                <div>
                    <img src="./img/chay2.jpg" alt="">
                    <h4>Canh rong biển</h4>
                    <button>Order</button>
                </div>
                <div>
                    <img src="./img/chay3.jpg" alt="">
                    <h4>Buger chay</h4>
                    <button>Order</button>
                </div>
                <div>
                    <img src="./img/chay4.jpg" alt="">
                    <h4>Xào thập cẩm</h4>
                    <button>Order</button>
                </div>
            </div>
            <h3><a href="#" class="btns">View All</a></h3>
        </div>

        <?php include 'footer.php' ?>


    </div>

</body>

</html>