<style>
    * {
        margin: 0;
        box-sizing: border-box;
    }

    .container {
        max-width: 1400px;
        margin: auto;
    }

    .header {
        background-color: #497951;
        height: 160px;
        display: flex;
        justify-content: space-between;
        padding: 0px 125px;
        align-items: center;
    }

    .background-header {
        background-color: #497951;
    }

    .logo {
        max-width: 150px;
        max-height: 150px;
        display: flex;
        align-items: center;
    }

    .right-header {
        display: flex;
        gap: 20px;
        align-items: center;
        background-color: #EDEDED;
        border: 1px solid #887F7F;
        padding: 10px 20px 5px 20px;
        border-radius: 4px;
    }

    .menu-mini li {
        list-style: none;
    }

    .menu-mini li .img {
        max-width: 40px;
    }

    .menu-mini .action-mini:hover .mini-m {
        display: block;
        margin-top: -350%;
        margin-left: 100%;
    }

    .action-mini {
        position: relative;
    }

    .mini-m {
        display: none;
        position: absolute;
        width: 170px;
        background-color: #EDEDED;
        border: 1px solid #887F7F;
        border-radius: 12px;
        padding: 15px 5px;
    }

    .mini-m li {
        text-align: center;
        background-color: #CFE6D6;
        border: 1px solid #35916A;
        border-radius: 14px;
        margin: 2px 0px;
    }

    .mini-m li:hover {
        background-color: #35916A;
        border: 1px solid #175B42;
    }

    .mini-m li:hover a {
        color: white;
    }

    .mini-m li a {
        color: black;
        text-decoration: none;
        display: block;
        border-radius: 14px;
    }

    .avatar {
        width: 50px;
        border: 1px solid #ED9E9E;
        border-radius: 50%;
        height: 50px;
        object-fit: cover;
    }
</style>
<style>
        .menu-bar{

        }
        .dropdown-menu{
            margin-left: 40px;
            margin-top: -20px;
        }
        .dropdown-menu li{
            margin: 0;
            padding: 0;
        }
        .dropdown-menu li:hover{
            background-color: white;
        }
        .nav-bar{
            display: block;
            padding-left: 20px;
        }
        .nav-bar:hover{
            background-color: white;
            color: #4099ff;
        }
    </style>
<script src="https://kit.fontawesome.com/2e8884d211.js" crossorigin="anonymous"></script>