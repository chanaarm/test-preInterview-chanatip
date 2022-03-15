<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id = "info"></div>
    <div id = "info1"></div>
    
    <script >
        const getCountry = [
                                {"name": "Thailand", "abbr": "th", "remark": "", "regionId": 1},
                                {"name": "Singapore", "abbr": "sg", "remark": "This is sg", "regionId": 1},
                                {"name": "United State", "abbr": "US", "remark": "", "regionId": 7}
        ]
        const getRegion =[
                                {"id": 1, "name": "Asia"},
                                {"id": 2, "name": "South America"},
                                {"id": 7, "name": "North America"}
                            ];
        if (getCountry[0].regionId = 1){
            info.innerHTML = getCountry[0].abbr +" : "+ getRegion[0].name ;
        };
        if (getCountry[1].regionId = 1){
            info1.innerHTML = getCountry[1].abbr +" : "+ getRegion[0].name ;
        };
        
        
    </script>

    

</body>
</html>