---
title: API Document

language_tabs:
- bash
- javascript


---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

API Reference
[Documentation Powered by Documentarian](http://github.com/mpociot/documentarian)


<!-- END_INFO -->

# Ubike


Ubike
<!-- START_6a2f889edad8db785fb427045c2a5173 -->
## 所有Ubike資訊

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/ubike" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/ubike"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "信義區": [
        "捷運市政府站(3號出口)",
        "台北市政府",
        "市民廣場",
        "興雅國中",
        "臺北南山廣場",
        "信義廣場(台北101)",
        "世貿三館",
        "松德站",
        "台北市災害應變中心",
        "三張犁",
        "臺北醫學大學",
        "福德公園",
        "松山家商",
        "象山公園",
        "松山車站",
        "永吉松信路口",
        "五常公園",
        "捷運後山埤站(1號出口)",
        "捷運台北101\/世貿站",
        "基隆光復路口",
        "捷運象山站",
        "吳興公車總站",
        "仁愛逸仙路口",
        "捷運永春站(2號出口)",
        "松德公園",
        "松山高中",
        "泰和公園",
        "林口公園",
        "三興公園",
        "富台公園",
        "信義基隆路口",
        "基隆路一段101巷口",
        "松友公園",
        "春光公園",
        "吳興街260巷",
        "福德國小",
        "松德虎林街口",
        "安強公園"
    ],
    "大安區": [
        "捷運國父紀念館站(2號出口)",
        "信義建國路口",
        "金山愛國路口",
        "基隆長興路口",
        "辛亥新生路口",
        "捷運六張犁站",
        "臺大資訊大樓",
        "捷運東門站(4號出口)",
        "臺灣師範大學(圖書館)",
        "捷運公館站(2號出口)",
        "捷運忠孝新生站(4號出口)",
        "龍門廣場",
        "臺北市立圖書館(總館)",
        "新生和平路口",
        "台灣科技大學",
        "仁愛醫院",
        "捷運信義安和站(4號出口)",
        "捷運台電大樓站(2號出口)",
        "捷運大安森林公園站",
        "信義敦化路口",
        "捷運大安站",
        "捷運忠孝復興站(2號出口)",
        "敦化基隆路口",
        "成功國宅",
        "羅斯福新生南路口",
        "捷運麟光站",
        "建國和平路口",
        "瑠公公園",
        "仁愛延吉街口",
        "臥龍樂業街口",
        "喬治工商",
        "忠孝東路三段217巷口",
        "大安運動中心",
        "敦親公園",
        "金華公園",
        "捷運古亭站(6號出口)",
        "仁愛安和路口",
        "捷運信義安和站(1號出口)",
        "敦化南路二段103巷口",
        "捷運忠孝復興站(5號出口)",
        "復興南路二段128巷口",
        "建國濟南路口",
        "和平金山路口",
        "復興南路一段340巷口",
        "嘉興公園",
        "和平龍泉街口",
        "和平敦化路口",
        "捷運科技大樓站(台北教育大學)"
    ],
    "中山區": [
        "榮星花園",
        "捷運行天宮站(1號出口)",
        "捷運行天宮站(3號出口)",
        "建國農安街口",
        "建國長春路口",
        "八德市場",
        "林森公園",
        "中山行政中心",
        "新生長安路口",
        "新生長春路口",
        "市立美術館",
        "林安泰古厝",
        "捷運劍南路站(2號出口)",
        "龍江南京路口",
        "捷運中山國小站(4號出口)",
        "捷運松江南京站(7號出口)",
        "興安華城",
        "劍潭社區",
        "捷運大直站(3號出口)",
        "市民林森路口",
        "樂群二敬業四路口",
        "北安大直街口",
        "培英公園",
        "撫順公園",
        "南京建國路口",
        "復興市民路口",
        "捷運中山國中站",
        "南京遼寧街口",
        "伊通長安路口",
        "松江公園",
        "第二果菜批發市場",
        "新生公園",
        "朱崙商場",
        "林森長春路口",
        "國立臺北大學(臺北校區)",
        "民族林森路口",
        "永盛公園(民生東路一段23巷)",
        "新興公園",
        "一江公園",
        "樂群二明水路口",
        "民族玉門街口",
        "捷運中山站(2號出口)",
        "民權建國路口",
        "民生建國路口",
        "錦州吉林路口",
        "南京新生路口"
    ],
    "松山區": [
        "民生光復路口",
        "臺北市藝文推廣處",
        "民生敦化路口",
        "中崙高中",
        "民權運動公園",
        "臺北田徑場",
        "民生活動中心",
        "民權復興路口",
        "三民公園",
        "新東公園",
        "捷運南京三民站(1號出口)",
        "捷運小巨蛋站(5號出口)",
        "捷運南京復興站(5號出口)",
        "饒河夜市(八德路側)",
        "內政部營建署",
        "市民東興路口",
        "光復南路22巷口",
        "健康新城",
        "捷運松山站(3號出口)",
        "敦北公園",
        "西松高中",
        "三軍總醫院(松山分院)",
        "敦化長春路口",
        "民有一號公園",
        "捷運南京三民站(3號出口)",
        "復盛公園",
        "南京光復路口",
        "民生立體停車場",
        "健安新城",
        "中崙福成宮",
        "塔悠疏散門",
        "松基公園",
        "南京東興路口",
        "新東街51巷口"
    ],
    "南港區": [
        "東新國小",
        "捷運昆陽站(1號出口)",
        "捷運南港展覽館站(5號出口)",
        "南港世貿公園",
        "玉成公園",
        "中研公園",
        "凌雲市場",
        "捷運南港軟體園區站(2號出口)",
        "南港國小",
        "南港車站(忠孝東路)",
        "南港公園",
        "舊莊區民活動中心",
        "東陽公園",
        "向陽南港路口",
        "八德中坡路口",
        "南港高工",
        "南港車站(興華路)",
        "合心廣場",
        "成德國中",
        "忠孝東路六段185巷口",
        "福山公園",
        "南港路二段178巷口"
    ],
    "中正區": [
        "仁愛林森路口",
        "捷運善導寺站(1號出口)",
        "南昌公園",
        "國家圖書館",
        "捷運臺大醫院(4號出口)",
        "信義連雲街口",
        "捷運西門站(3號出口)",
        "和平重慶路口",
        "金山市民路口",
        "華山文創園區",
        "臺北市客家文化主題公園",
        "捷運小南門站(1號出口)",
        "臺北轉運站",
        "羅斯福寧波東街口",
        "河堤國小",
        "植物園",
        "捷運古亭站(2號出口)",
        "臺北市立大學",
        "信義杭州路口(中華電信總公司)",
        "中山堂",
        "螢橋國小",
        "濟南紹興路口",
        "牯嶺公園",
        "自來水園區",
        "捷運忠孝新生站(2號出口)",
        "光華商場",
        "莒光大埔街口",
        "重慶南海路口",
        "中正運動中心",
        "博愛寶慶路口",
        "中山青島路口",
        "紀州庵",
        "南門國中",
        "聯合醫院和平院區"
    ],
    "萬華區": [
        "青年公園3號出口",
        "國興青年路口",
        "華江高中",
        "復華花園新城",
        "老松國小",
        "開封西寧路口",
        "東園國小",
        "萬華車站",
        "峨嵋停車場",
        "西園艋舺路口",
        "捷運龍山寺站(1號出口)",
        "華西公園",
        "古亭國中",
        "龍山國小",
        "大理高中",
        "中華桂林路口",
        "錦德公園",
        "西本願寺廣場",
        "長沙公園",
        "萬華國中",
        "雙園國中",
        "新和國小"
    ],
    "文山區": [
        "師範大學公館校區",
        "興豐公園",
        "捷運景美站",
        "羅斯福景隆街口",
        "台北花木批發市場",
        "文山行政中心",
        "捷運木柵站",
        "捷運動物園站(2號出口)",
        "國立政治大學",
        "考試院",
        "臺北市立景美女中",
        "文山運動中心",
        "木柵光輝路口",
        "捷運辛亥站",
        "捷運萬芳社區站",
        "文山第二行政中心",
        "木柵公園",
        "永安藝文館-表演36房",
        "忠順區民活動中心",
        "萬和二號公園",
        "捷運萬隆站(1號出口)",
        "景文中學",
        "世新大學",
        "一壽橋",
        "和興路26巷口",
        "景華街128巷口",
        "景仁公園"
    ],
    "大同區": [
        "酒泉延平路口",
        "捷運圓山站(2號出口)",
        "捷運民權西路站(3號出口)",
        "捷運雙連站(2號出口)",
        "臺北孔廟",
        "永樂市場",
        "捷運大橋頭站(2號出口)",
        "樹德公園",
        "蔣渭水紀念公園",
        "圓環站",
        "捷運北門站(3號出口)",
        "大稻埕公園",
        "市民太原路口",
        "聯合醫院中興院區",
        "太原五原路口",
        "迪化休閒運動公園",
        "承德路三段8巷口",
        "重慶國中",
        "重慶酒泉街口",
        "民權迪化街口",
        "重慶民族路口",
        "民族延平路口"
    ],
    "士林區": [
        "捷運劍潭站(2號出口)",
        "蘭雅公園",
        "福林公園",
        "天母運動公園",
        "蘭興公園",
        "捷運芝山站(2號出口)",
        "捷運士林站(2號出口)",
        "士林運動中心",
        "百齡國小",
        "中正基河路口",
        "臺北市立天文館",
        "葫蘆國小",
        "延平國宅",
        "社子國小",
        "臺北市立大學(天母校區)",
        "福安國中",
        "蘭雅國小",
        "社正公園",
        "中山天母路口",
        "社子公園",
        "國立故宮博物院",
        "華齡公園",
        "芝山抽水站",
        "中山中正路口",
        "至善臨溪路口",
        "雨農國小",
        "芝山國小",
        "士林新天地",
        "華聲公園",
        "市立圖書館葫蘆堵分館",
        "捷運芝山站(1號出口)",
        "陽明高中",
        "臺灣戲曲中心",
        "銘傳大學",
        "劍潭海外青年活動中心",
        "聯合醫院陽明院區"
    ],
    "內湖區": [
        "文湖國小",
        "捷運港墘站(2號出口)",
        "東湖國中",
        "捷運文德站(2號出口)",
        "洲子二號公園",
        "瑞光港墘路口",
        "東湖國小",
        "麗山國小",
        "捷運東湖站",
        "捷運西湖站(1號出口)",
        "福華商場",
        "金瑞公園(金龍路)",
        "捷運大湖公園站(2號出口)",
        "捷運葫洲站(1號出口)",
        "新湖國小",
        "星雲金湖街口",
        "基河一期國宅",
        "臺北花市",
        "麗山高中",
        "湖光國宅",
        "瑞湖陽光街口",
        "新明路262巷口",
        "民權瑞光路口",
        "洲子一號公園",
        "三軍總醫院",
        "扶輪親恩公園",
        "明美公園",
        "德明財經科技大學",
        "安泰街83巷",
        "碧山公園",
        "成功金龍路口",
        "南京東路六段368巷",
        "彩虹橋",
        "臺北市網球中心",
        "新明成功路口",
        "碧湖公園",
        "麗湖國小",
        "陽光街321巷口",
        "民權東路六段15巷",
        "內溝溪生態展示館",
        "下灣公園",
        "捷運內湖站(1號出口)"
    ],
    "北投區": [
        "捷運新北投站",
        "捷運北投站",
        "大業大同街口",
        "振華公園",
        "捷運石牌站(2號出口)",
        "國立臺北護理健康大學",
        "國防大學",
        "捷運明德站",
        "北投運動中心",
        "大豐公園",
        "捷運奇岩站",
        "捷運唭哩岸站(2號出口)",
        "捷運關渡站",
        "捷運復興崗站",
        "清江國小",
        "捷運忠義站",
        "永欣綠地",
        "關渡自然公園",
        "關渡宮",
        "立功立德路口",
        "秀山區民活動中心",
        "中央北路四段30巷口",
        "中央北路四段540巷口",
        "文林建民路口",
        "振興醫院",
        "陽明大學",
        "豐年公園",
        "稻香重三路口"
    ]
}
```

### HTTP Request
`GET api/ubike`


<!-- END_6a2f889edad8db785fb427045c2a5173 -->

<!-- START_970daf40f914062417baf9b75d50b434 -->
## 秀出特定Ubike資訊

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/ubike/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/ubike/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "站點代號": "0001",
    "中文場站區域": "信義區",
    "中文場站名稱": "捷運市政府站(3號出口)",
    "中文地址": "忠孝東路\/松仁路(東南側)",
    "可借車位數": 57,
    "可還空位數": 123,
    "資料更新時間": "May 16th, 2021 07:27:25"
}
```

### HTTP Request
`GET api/ubike/{sno}`


<!-- END_970daf40f914062417baf9b75d50b434 -->


<!-- START_cb859c8e84c35d7133b6a6c8eac253f8 -->
## 首頁畫面

> Example request:

```bash
curl -X GET \
    -G "http://localhost/home" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/home"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET home`


<!-- END_cb859c8e84c35d7133b6a6c8eac253f8 -->

# 使用者


使用者登入
<!-- START_66e08d3cc8222573018fed49e121e96d -->
## 顯示登入畫面

> Example request:

```bash
curl -X GET \
    -G "http://localhost/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET login`


<!-- END_66e08d3cc8222573018fed49e121e96d -->

<!-- START_ba35aa39474cb98cfb31829e70eb8b74 -->
## 處理登入需求

> Example request:

```bash
curl -X POST \
    "http://localhost/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST login`


<!-- END_ba35aa39474cb98cfb31829e70eb8b74 -->

<!-- START_e65925f23b9bc6b93d9356895f29f80c -->
## 將用戶登出

> Example request:

```bash
curl -X POST \
    "http://localhost/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST logout`


<!-- END_e65925f23b9bc6b93d9356895f29f80c -->

<!-- START_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->
## 顯示註冊用戶畫面

> Example request:

```bash
curl -X GET \
    -G "http://localhost/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET register`


<!-- END_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->

<!-- START_d7aad7b5ac127700500280d511a3db01 -->
## 處理註冊需求

> Example request:

```bash
curl -X POST \
    "http://localhost/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST register`


<!-- END_d7aad7b5ac127700500280d511a3db01 -->

<!-- START_d72797bae6d0b1f3a341ebb1f8900441 -->
## 顯示表單以請求密碼重置鏈接

> Example request:

```bash
curl -X GET \
    -G "http://localhost/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset`


<!-- END_d72797bae6d0b1f3a341ebb1f8900441 -->

<!-- START_feb40f06a93c80d742181b6ffb6b734e -->
## 將重置鏈接發給指定用戶

> Example request:

```bash
curl -X POST \
    "http://localhost/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/email`


<!-- END_feb40f06a93c80d742181b6ffb6b734e -->

<!-- START_e1605a6e5ceee9d1aeb7729216635fd7 -->
## 密碼重製畫面

如果沒有token, 顯示需求連結

> Example request:

```bash
curl -X GET \
    -G "http://localhost/password/reset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/reset/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset/{token}`


<!-- END_e1605a6e5ceee9d1aeb7729216635fd7 -->

<!-- START_cafb407b7a846b31491f97719bb15aef -->
## 重製

> Example request:

```bash
curl -X POST \
    "http://localhost/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/reset`


<!-- END_cafb407b7a846b31491f97719bb15aef -->


