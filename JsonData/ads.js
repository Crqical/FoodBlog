<script type="text/javascript">
  var imageUrls = [
       "https://www.chewboom.com/wp-content/uploads/2020/03/Arby%E2%80%99s-Launches-2-For-6-Everyday-Value-Deal-678x381.jpg"
     , "https://images-cdn.ispot.tv/ad/ZLW7/default-large.jpg"
     , "https://www.subway.com/-/media/Base_Arabic/English/Promotions/Marquees/Mobile/HomeBanner/jan-2018-all-markets-mobile-en.jpg"
     , "https://www.wordstream.com/wp-content/uploads/2021/07/persuasive-ads-coca-cola.jpg"
     , "https://www.inma.org/files/images/blogs/feature_photos/print_september20_hannah_2020-in-ads-1800.jpg"
    , "https://o.quizlet.com/YeYDSUwgmGDFuqltrrQN8w_b.jpg"
    , "https://www.gannett-cdn.com/presto/2020/07/14/USAT/e98ba2b4-25c4-47f4-af22-39f22959f74b-CFH_Hero_Image.jpg"
    , "http://d1fd34dzzl09j.cloudfront.net/Images/CFACOM/Stories%20Images/2015/07%20July/20%20Years%20of%20Cows/Original%20EMC%20Billboard.JPG"
    , "https://i.ytimg.com/vi/YxQQhMT33mg/maxresdefault.jpg"
    , "https://s3-prod.adage.com/s3fs-public/20201222-Baskin-Robbins-Cup-Suits_3x2.jpg"
  ];
 var imageLinks = [
       "https://www.arbys.com"
      , "https://www.wendys.com/"
    , "https://www.subway.com"
    , "http://www.coke.com"
    , "http://www.KFC.com"
    , "http://www.skittles.com"
       , "http://www.doritos.com/"
      , "https://www.chick-fil-a.com/"
      , "https://www.chipotle.com/"
     , "https://www.baskinrobbins.com/en"    
  ];

  function getImageHtmlCode() {
    var dataIndex = Math.floor(Math.random() * imageUrls.length);
    var img = '<a href=\"' + imageLinks[dataIndex] + '"><img src="';        
    img += imageUrls[dataIndex];
    img += '\" alt=\"Jorgesys Stackoverflow.com\"/></a>';
    return img;
  }
</script>

<body bgcolor="white">
<script type="text/javascript">
  document.write(getImageHtmlCode());
</script>
</body>
</html>