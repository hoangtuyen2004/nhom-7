<style>
                .section {
                    display: grid;
                    grid-template-columns: 1fr 2fr;
                    gap: 20px;
                    margin-top: 50px;
                    margin-bottom: 70px;
                }

                .user {
                    background-color: #ffffff;
                    width: 100%;
                    display: grid;
                    align-content: center;
                    align-items: center;
                    padding: 20px;
                    box-shadow: 0px 1px 5px -2px;
                }

                .list-action-user {
                    background-color: white;
                    width: 100%;
                    box-shadow: 0px 1px 3px gray;
                }

                .img-user {
                    display: flex;
                    justify-content: space-around;
                    align-items: center;
                    margin: 20px 0px 0px 0px;
                }

                .img-user img {
                    width: 200px;
                    border-radius: 50%;
                    border: 1px solid red;
                    transition: 2s ease-in-out;
                    overflow: hidden;
                    position: relative;
                    height: 200px;
                    object-fit: cover;
                }

                .img-user img:hover {
                    border: 1px solid green;
                }

                .account {
                    text-align: center;
                }

                .action-user {
                    padding: 20px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }

                .action {
                    display: grid;
                    align-content: center;
                    align-items: center;
                    text-align: center;
                    width: 100%;
                }

                .action a {
                    line-height: 15px;
                    display: block;
                    margin-bottom: 10px;
                    background-color: #ddccddcc;
                    padding: 3px;
                    color: #9f0395dd;
                    font-size: 14px;
                }

                .action a:hover {
                    box-shadow: 0px 1px 4px gray;
                    color: #9f0395dd;
                    font-weight: bold;
                }

                .list-action-user {
                    padding: 10px;
                }

                .box-action {
                    background-color: whitesmoke;
                    width: 100%;
                    height: 100%;
                    padding: 20px 40px;
                }

                .box-action h1 {
                    margin: 0;
                    text-align: center;
                    padding: inherit;
                }

                .box-action button {
                    margin-top: 100px;
                }

                .img-box {
                    width: 50%;
                    height: 50%;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    background-color: #f7b2b2;
                    padding: 30px;
                    border-radius: 50%;
                }

                .notify {
                    display: grid;
                    grid-template-columns: 1fr 5fr;
                    padding: 5px;
                    background-color: white;
                    margin-bottom: 10px;
                }

                .commit h4 {
                    margin: 0;
                }

                .commit {
                    padding-left: 10px;
                    border-left: 1px solid;
                }

                .titli-feedback {
                    margin: 0;
                }
            </style>