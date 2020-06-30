<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Test task</title>
    <link href="css/app.css" rel="stylesheet">
</head>
<body>
    <div class="main">
        <div class="content">
            <div class="content-p">
                <p id="title">Недавний конкурс</p>
                <p id="title-second">Сезонный конкурс</p>
                <p id="title-top">Топ 50</p>
            </div>
            <div class="content-table">
                <table>
                    <thead>
                    <tr id="title-table">
                        <th>Участники</th>
                        <th id="rigth">Бонусные баллы</th>
                        <th id="rigth">Профиль</th>
                        <th id="rigth">Рейтинг</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="priority-200">
                        <td class="name">
                            <div id="ic_image"></div>
                            <p id="th_name">tina_gaznanova</p>
                        </td>
                        <td class="one" id="rigth">
                            <p id="raiting">
                                190
                            </p>
                        </td>
                        <td class="two" id="rigth">
                            <div class="profile">
                                <img src="../image/ic_profile.png"/>
                            </div>
                        </td>
                        <td class="three" id="rigth"><i class="fas fa-circle"></i> 200</td>

{{--                        <td class="delete"><button class="delete-btn"><i class="fas fa-trash-alt" title="delete row"></i></button></td>--}}
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
