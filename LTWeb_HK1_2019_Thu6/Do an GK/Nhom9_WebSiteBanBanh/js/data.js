let bakeries = [
    {
        "id": 1,
        "name": "Almond Milk Press 1",
        "price": 340000,
        "des": "Bánh kem mouse hạnh nhân",
        "img": "banh_1.jpg"
    },
    {
        "id": 2,
        "name": "Crispy apple raisin",
        "price": 25000,
        "des": "Bánh lớp giòn, xốp, ngọt có táo lát  và nho khô tạo vị ngọt tự nhiên.",
        "img": "banh_2.jpg"
    },
    {
        "id": 3,
        "name": "Premium fresh cream No1A",
        "price": 310000,
        "des": "Bánh kem sữa tươi bên trong có bánh bông lan trứng sữa cộng với mứt trái cây tạo vị ngọt dễ ăn.",
        "img": "banh_3.jpg"
    },
    {
        "id": 4,
        "name": "Red Bean Donut",
        "price": 18000,
        "des": "Bánh chiên bên trong có đậu đỏ, bên ngoài có phủ thêm 1 lớp đường.",
        "img": "banh_4.jpg"
    },
    {
        "id": 5,
        "name": "Mango Coconut Cake 1",
        "price": 340000,
        "des": "Bánh kem mouse vị dừa và xoài bên ngoài có phủ thêm 1 lớp hạnh nhân.",
        "img": "banh_5.jpg"
    },
    {
        "id": 6,
        "name": "Propose heart Cake 1",
        "price": 250000,
        "des": "Bánh kem bơ dâu và dâu tây hình trái tim, phía trên có phủ lớp socola trắng.",
        "img": "banh_6.jpg"
    },
    {
        "id": 7,
        "name": "Choco Ganache Cake 1",
        "price": 330000,
        "des": "Bánh kem bơ vị socola, phía trên còn trang trí thêm 2 thỏi socola đen và những hạt socola tròn.",
        "img": "banh_7.jpg"
    },
    {
        "id": 8,
        "name": "Cookie and Cream Ball 2",
        "price": 370000,
        "des": "Dạng bánh kem mouse, bánh bông lan kem cookie, phía trên còn trang trí nhiều bánh Oreo.",
        "img": "banh_8.jpg"
    },
    {
        "id": 9,
        "name": "Magic 4(new)",
        "price": 460000,
        "des": "Bánh kem sữa tươi, bên trong là bánh bông lan socola, phía trên là một lớp mứt dâu, đồng thời trang trí thêm nhiều loại trái cây như cam, nho đen, nho xanh, dâu, rasberry…",
        "img": "banh_9.jpg"
    },
    {
        "id": 10,
        "name": "Mini Sfoglier Glassate",
        "price": 17000,
        "des": "Bánh nướng ý giòn rụm, phủ lớp maringue thơm ngon.",
        "img": "banh_10.jpg"
    },
    {
        "id": 11,
        "name": "Rasberry pastry",
        "price": 27000,
        "des": "Bánh lớp giòn, xốp, phía trên có mứt và trái rasberry. Tạo vị ngọt dịu khi ăn.",
        "img": "banh_11.jpg"
    },
    {
        "id": 12,
        "name": "Macadamia Kouign-amann",
        "price": 39000,
        "des": "Bánh lớp có hạt macadamia ở phía trên, khi ăn tạo vị ngọt, giòn, xốp.",
        "img": "banh_12.jpg"
    },
    {
        "id": 13,
        "name": "Fruity Fresh Cream cake 5A",
        "price": 560000,
        "des": "Bánh kem sữa tươi, bánh bông lan trứng sữa truyền thống bên trong có mứt trái cây, phía trên có trang trí trái cây.",
        "img": "banh_13.jpg"
    },
    {
        "id": 14,
        "name": "Caramel nut pastry",
        "price": 26000,
        "des": "Bánh ngàn lớp giòn tan, được phủ các loại hạt giàu dinh dưỡng.",
        "img": "banh_14.jpg"
    },
    {
        "id": 15,
        "name": "Happy bread",
        "price": 20000,
        "des": "Bánh ngọt bên trong có nhân trứng sữa, thích hợp cho bữa ăn nhẹ.",
        "img": "banh_15.jpg"
    },
    {
        "id": 16,
        "name": "Flower pop pastry",
        "price": 27000,
        "des": "Bánh lớp phía trên có trang trí thêm một ít yogurt.",
        "img": "banh_16.jpg"
    },
    {
        "id": 17,
        "name": "Pate Chaud",
        "price": 19000,
        "des": "Bánh lớp bên trong có nhân pate.",
        "img": "banh_17.jpg"
    },
    {
        "id": 18,
        "name": "Blueberry pastry",
        "price": 28000,
        "des": "Bánh lớp có phủ ở giữa một lớp mứt và trái blueberry, tạo vị ngọt dịu và giòn xốp khi ăn.",
        "img": "banh_18.jpg"
    },
    {
        "id": 19,
        "name": "Potato bacon pastry",
        "price": 19000,
        "des": "Bánh lớp khoai tây kết hợp với  thịt xông khói.",
        "img": "banh_19.jpg"
    },
    {
        "id": 20,
        "name": "Crispy almond cranberry",
        "price": 25000,
        "des": "Bánh lớp kết hợp với hạnh nhân béo và vị chua ngọt của nam việt quốc khô.",
        "img": "banh_20.jpg"
    },
    {
        "id": 21,
        "name": "Potato bacon tartine",
        "price": 29000,
        "des": "Là dạng sandwich mỡ bánh được làm từ plain campanue khoai tây và thịt xông khói kết hợp với phô mai.",
        "img": "banh_21.jpg"
    },
    {
        "id": 22,
        "name": "Opera cake 2",
        "price": 310000,
        "des": "Bánh kem bơ socola, phía trên được trang trí nhiều lát socola mỏng.",
        "img": "banh_22.jpg"
    },
    {
        "id": 23,
        "name": "Cloud bread",
        "price": 22000,
        "des": "Bánh mì hình đám mây, bên trong là kem sữa mềm mại và kem đậu phộng thơm béo.",
        "img": "banh_23.jpg"
    }
];