<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .itemactionfor {
        display: flex;
    }

    .statusitems {
        border: 3px solid #FE4C6F;
        border-radius: 5px;
        margin-bottom: 60px;
        margin-top: 22px;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 5px;

    }

    .itemstatus1 {
        font-size: 18px;
        font-weight: bold;
    }

    .itemstatus2 {
        border-radius: 5px;

        font-size: 17px;
        border: 2px solid #FE4C6F;
        padding-left: 10px;
    }

    .exrtasub {
        margin-top: -4px;
        background-color: #FE4C6F;
        border: none;
    }

    .itemstatusdisplay {
        font-size: 14px;
        font-family: 'Varela Round', sans-serif;
        font-weight: bold;
        margin-bottom: 15px;
        margin-top: 10px;

    }

    .exrtasub1 {
        margin-top: 45px;
        background-color: #FE4C6F;
        margin-left: 20px;
        border: none;
    }
</style>

<body>
    <div class='itemactionfor'>


        <div class='statusitems'>
            <form action='sellingitem.php?updatedid=$productid1' method='POST'>

                <label for='itemstatus' class='form-label itemstatus1'>Status</label>

                <select class='form-select itemstatus2' name='itemstatus' id='itemstatus' required>
                    <option selected disabled value=''>Status</option>
                    <option value='In_Progress'>In_Progress</option>
                    <option value='Completed'>Completed</option>
                </select>

                <button class='btn btn-primary exrtasub' type='submit' name='changestatus'>Change Status</button>


            </form>

            <h6 class='itemstatusdisplay'>Current-Order-Status: <span class='itemdispayite'>$status21</span></h6>

        </div>

        <div>

            <a href='deleteitemforever.php?deleteid1=$productid1' class='itemdelete'><button class='btn btn-primary exrtasub1' name='delete12'>Delete Item</button>
            </a>

        </div>

    </div>

</body>

</html>