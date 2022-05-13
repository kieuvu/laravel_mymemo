@extends("layouts.main")
@section("styles")
<link rel="stylesheet" href="{{asset('assets/css/client/home.css')}}">
@stop
@section('content')
<div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
  <div class="mansory" id="mansory_items">

  </div>
</div>
@stop

@section("scripts")
<script>
  $(document).ready(function() {
  const testSource =[{
  "img_url": "https://cdn.unenvironment.org/2022-03/field-ge4d2466da_1920.jpg",
  "title": "id ornare imperdiet sapien urna pretium nisl ut volutpat",
}, {
  "img_url": "http://dummyimage.com/1008x553.png/cc0000/ffffff",
  "title": "cras in purus eu magna vulputate luctus cum sociis natoque penatibus et",
}, {
  "img_url": "http://dummyimage.com/864x861.png/ff4444/ffffff",
  "title": "turpis eget elit sodales scelerisque mauris sit amet eros suspendisse accumsan tortor quis turpis",
}, {
  "img_url": "http://dummyimage.com/791x574.png/ff4444/ffffff",
  "title": "sapien quis libero nullam sit amet turpis elementum ligula",
}, {
  "img_url": "http://dummyimage.com/914x628.png/ff4444/ffffff",
  "title": "neque duis bibendum morbi non quam nec dui luctus rutrum nulla tellus",
}, {
  "img_url": "http://dummyimage.com/813x750.png/dddddd/000000",
  "title": "nec condimentum neque sapien placerat ante nulla justo aliquam quis turpis eget",
}, {
  "img_url": "http://dummyimage.com/936x825.png/ff4444/ffffff",
  "title": "facilisi cras non velit nec nisi vulputate nonummy maecenas tincidunt lacus",
}, {
  "img_url": "http://dummyimage.com/995x925.png/5fa2dd/ffffff",
  "title": "bibendum imperdiet nullam orci pede venenatis non",
}, {
  "img_url": "http://dummyimage.com/866x765.png/dddddd/000000",
  "title": "curabitur in libero ut massa volutpat convallis morbi odio",
}, {
  "img_url": "http://dummyimage.com/864x548.png/ff4444/ffffff",
  "title": "viverra diam vitae quam suspendisse potenti nullam porttitor lacus at turpis donec posuere metus",
}, {
  "img_url": "http://dummyimage.com/860x517.png/cc0000/ffffff",
  "title": "dis parturient montes nascetur ridiculus mus etiam vel augue",
}, {
  "img_url": "http://dummyimage.com/909x652.png/cc0000/ffffff",
  "title": "pede ac diam cras pellentesque volutpat dui maecenas tristique",
}, {
  "img_url": "http://dummyimage.com/537x864.png/dddddd/000000",
  "title": "nullam molestie nibh in lectus pellentesque at nulla suspendisse potenti",
}, {
  "img_url": "http://dummyimage.com/690x689.png/cc0000/ffffff",
  "title": "ultrices posuere cubilia curae duis faucibus accumsan",
}, {
  "img_url": "http://dummyimage.com/527x828.png/5fa2dd/ffffff",
  "title": "sit amet eros suspendisse accumsan tortor quis turpis",
}, {
  "img_url": "http://dummyimage.com/983x607.png/dddddd/000000",
  "title": "feugiat non pretium quis lectus suspendisse potenti in eleifend quam a odio",
}, {
  "img_url": "http://dummyimage.com/695x951.png/dddddd/000000",
  "title": "praesent lectus vestibulum quam sapien varius ut blandit non",
}, {
  "img_url": "http://dummyimage.com/527x722.png/ff4444/ffffff",
  "title": "pulvinar nulla pede ullamcorper augue a suscipit nulla",
}, {
  "img_url": "http://dummyimage.com/758x826.png/dddddd/000000",
  "title": "ultrices posuere cubilia curae nulla dapibus dolor vel est donec odio",
}, {
  "img_url": "http://dummyimage.com/965x820.png/dddddd/000000",
  "title": "nec nisi volutpat eleifend donec ut dolor morbi",
}, {
  "img_url": "http://dummyimage.com/813x840.png/dddddd/000000",
  "title": "nulla quisque arcu libero rutrum ac lobortis vel",
}, {
  "img_url": "http://dummyimage.com/781x557.png/ff4444/ffffff",
  "title": "porttitor lacus at turpis donec posuere metus vitae ipsum aliquam non mauris morbi non",
}, {
  "img_url": "http://dummyimage.com/697x865.png/ff4444/ffffff",
  "title": "libero quis orci nullam molestie nibh in lectus",
}, {
  "img_url": "http://dummyimage.com/765x636.png/ff4444/ffffff",
  "title": "sagittis sapien cum sociis natoque penatibus et magnis dis parturient montes",
}, {
  "img_url": "http://dummyimage.com/743x938.png/5fa2dd/ffffff",
  "title": "etiam faucibus cursus urna ut tellus nulla ut",
}, {
  "img_url": "http://dummyimage.com/686x900.png/cc0000/ffffff",
  "title": "at nibh in hac habitasse platea dictumst aliquam augue quam sollicitudin vitae consectetuer",
}, {
  "img_url": "http://dummyimage.com/634x767.png/cc0000/ffffff",
  "title": "volutpat sapien arcu sed augue aliquam erat volutpat in",
}, {
  "img_url": "http://dummyimage.com/540x534.png/ff4444/ffffff",
  "title": "vivamus in felis eu sapien cursus vestibulum proin eu mi nulla ac enim in",
}, {
  "img_url": "http://dummyimage.com/975x783.png/5fa2dd/ffffff",
  "title": "eu sapien cursus vestibulum proin eu mi nulla ac enim in tempor",
}, {
  "img_url": "http://dummyimage.com/565x872.png/dddddd/000000",
  "title": "vel pede morbi porttitor lorem id ligula suspendisse ornare consequat lectus in est risus",
}, {
  "img_url": "http://dummyimage.com/599x835.png/cc0000/ffffff",
  "title": "ligula suspendisse ornare consequat lectus in est risus",
}, {
  "img_url": "http://dummyimage.com/648x781.png/dddddd/000000",
  "title": "quisque porta volutpat erat quisque erat eros viverra eget congue eget semper rutrum nulla",
}, {
  "img_url": "http://dummyimage.com/559x730.png/ff4444/ffffff",
  "title": "sapien cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus etiam",
}, {
  "img_url": "http://dummyimage.com/954x743.png/cc0000/ffffff",
  "title": "suscipit nulla elit ac nulla sed vel enim sit amet nunc",
}, {
  "img_url": "http://dummyimage.com/957x973.png/dddddd/000000",
  "title": "vestibulum rutrum rutrum neque aenean auctor gravida",
}, {
  "img_url": "http://dummyimage.com/851x761.png/dddddd/000000",
  "title": "accumsan tortor quis turpis sed ante vivamus tortor duis mattis egestas",
}, {
  "img_url": "http://dummyimage.com/919x935.png/cc0000/ffffff",
  "title": "suspendisse potenti cras in purus eu magna vulputate luctus cum sociis natoque penatibus et magnis",
}, {
  "img_url": "http://dummyimage.com/664x665.png/ff4444/ffffff",
  "title": "potenti nullam porttitor lacus at turpis donec posuere metus",
}, {
  "img_url": "http://dummyimage.com/963x705.png/5fa2dd/ffffff",
  "title": "adipiscing elit proin interdum mauris non ligula pellentesque",
}, {
  "img_url": "http://dummyimage.com/732x585.png/dddddd/000000",
  "title": "id mauris vulputate elementum nullam varius nulla facilisi cras non",
}, {
  "img_url": "http://dummyimage.com/746x885.png/dddddd/000000",
  "title": "pede ac diam cras pellentesque volutpat dui maecenas tristique",
}, {
  "img_url": "http://dummyimage.com/930x875.png/cc0000/ffffff",
  "title": "sapien ut nunc vestibulum ante ipsum primis in faucibus orci luctus et ultrices",
}, {
  "img_url": "http://dummyimage.com/636x934.png/dddddd/000000",
  "title": "integer ac neque duis bibendum morbi non quam nec",
}, {
  "img_url": "http://dummyimage.com/1023x624.png/cc0000/ffffff",
  "title": "maecenas leo odio condimentum id luctus nec molestie sed justo pellentesque",
}, {
  "img_url": "http://dummyimage.com/879x925.png/cc0000/ffffff",
  "title": "sed magna at nunc commodo placerat praesent blandit nam",
}, {
  "img_url": "http://dummyimage.com/724x928.png/dddddd/000000",
  "title": "sed tincidunt eu felis fusce posuere felis",
}, {
  "img_url": "http://dummyimage.com/946x693.png/5fa2dd/ffffff",
  "title": "amet erat nulla tempus vivamus in felis eu sapien cursus",
}, {
  "img_url": "http://dummyimage.com/753x534.png/5fa2dd/ffffff",
  "title": "posuere cubilia curae duis faucibus accumsan odio curabitur convallis duis consequat dui nec nisi volutpat",
}, {
  "img_url": "http://dummyimage.com/649x1023.png/dddddd/000000",
  "title": "dolor quis odio consequat varius integer ac leo pellentesque ultrices mattis odio donec",
}, {
  "img_url": "http://dummyimage.com/909x815.png/ff4444/ffffff",
  "title": "rhoncus aliquet pulvinar sed nisl nunc rhoncus dui vel sem sed",
}, {
  "img_url": "http://dummyimage.com/599x732.png/ff4444/ffffff",
  "title": "pretium quis lectus suspendisse potenti in eleifend quam a odio",
}, {
  "img_url": "http://dummyimage.com/826x748.png/ff4444/ffffff",
  "title": "nunc donec quis orci eget orci vehicula condimentum curabitur in libero ut massa volutpat convallis",
}, {
  "img_url": "http://dummyimage.com/759x901.png/5fa2dd/ffffff",
  "title": "urna ut tellus nulla ut erat id mauris vulputate elementum nullam varius nulla facilisi cras",
}, {
  "img_url": "http://dummyimage.com/799x821.png/ff4444/ffffff",
  "title": "pellentesque eget nunc donec quis orci eget orci vehicula condimentum",
}, {
  "img_url": "http://dummyimage.com/847x873.png/dddddd/000000",
  "title": "cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus etiam",
}, {
  "img_url": "http://dummyimage.com/782x541.png/cc0000/ffffff",
  "title": "vestibulum sit amet cursus id turpis integer aliquet massa id lobortis convallis tortor",
}, {
  "img_url": "http://dummyimage.com/558x587.png/dddddd/000000",
  "title": "amet diam in magna bibendum imperdiet nullam orci pede",
}, {
  "img_url": "http://dummyimage.com/662x788.png/ff4444/ffffff",
  "title": "sapien varius ut blandit non interdum in ante vestibulum ante ipsum primis in faucibus",
}, {
  "img_url": "http://dummyimage.com/739x570.png/ff4444/ffffff",
  "title": "augue quam sollicitudin vitae consectetuer eget rutrum at lorem",
}, {
  "img_url": "http://dummyimage.com/570x888.png/ff4444/ffffff",
  "title": "eleifend donec ut dolor morbi vel lectus in quam fringilla rhoncus",
}, {
  "img_url": "http://dummyimage.com/747x1012.png/ff4444/ffffff",
  "title": "arcu sed augue aliquam erat volutpat in congue",
}, {
  "img_url": "http://dummyimage.com/602x763.png/5fa2dd/ffffff",
  "title": "laoreet ut rhoncus aliquet pulvinar sed nisl",
}, {
  "img_url": "http://dummyimage.com/941x575.png/5fa2dd/ffffff",
  "title": "suscipit ligula in lacus curabitur at ipsum ac tellus semper interdum mauris ullamcorper purus",
}, {
  "img_url": "http://dummyimage.com/871x792.png/ff4444/ffffff",
  "title": "pellentesque at nulla suspendisse potenti cras in",
}, {
  "img_url": "http://dummyimage.com/1013x767.png/dddddd/000000",
  "title": "eu sapien cursus vestibulum proin eu mi nulla ac enim in tempor turpis nec euismod",
}, {
  "img_url": "http://dummyimage.com/627x931.png/5fa2dd/ffffff",
  "title": "quis turpis sed ante vivamus tortor duis mattis egestas metus aenean fermentum donec",
}, {
  "img_url": "http://dummyimage.com/928x970.png/ff4444/ffffff",
  "title": "nisl ut volutpat sapien arcu sed augue aliquam erat volutpat in congue etiam",
}, {
  "img_url": "http://dummyimage.com/825x588.png/cc0000/ffffff",
  "title": "rhoncus sed vestibulum sit amet cursus id",
}, {
  "img_url": "http://dummyimage.com/883x533.png/5fa2dd/ffffff",
  "title": "nunc viverra dapibus nulla suscipit ligula in lacus curabitur at",
}, {
  "img_url": "http://dummyimage.com/698x722.png/5fa2dd/ffffff",
  "title": "adipiscing elit proin interdum mauris non ligula pellentesque ultrices phasellus id sapien",
}, {
  "img_url": "http://dummyimage.com/1006x935.png/dddddd/000000",
  "title": "at ipsum ac tellus semper interdum mauris ullamcorper purus sit amet nulla",
}, {
  "img_url": "http://dummyimage.com/912x875.png/cc0000/ffffff",
  "title": "orci vehicula condimentum curabitur in libero ut",
}, {
  "img_url": "http://dummyimage.com/508x761.png/dddddd/000000",
  "title": "vivamus vel nulla eget eros elementum pellentesque quisque",
}, {
  "img_url": "http://dummyimage.com/635x519.png/cc0000/ffffff",
  "title": "semper interdum mauris ullamcorper purus sit amet nulla",
}, {
  "img_url": "http://dummyimage.com/649x725.png/ff4444/ffffff",
  "title": "et ultrices posuere cubilia curae nulla dapibus dolor vel est donec odio justo sollicitudin ut",
}, {
  "img_url": "http://dummyimage.com/700x866.png/cc0000/ffffff",
  "title": "lacus at turpis donec posuere metus vitae ipsum aliquam non mauris morbi non lectus",
}, {
  "img_url": "http://dummyimage.com/786x674.png/5fa2dd/ffffff",
  "title": "diam vitae quam suspendisse potenti nullam porttitor lacus at turpis donec posuere",
}, {
  "img_url": "http://dummyimage.com/564x833.png/cc0000/ffffff",
  "title": "primis in faucibus orci luctus et ultrices",
}, {
  "img_url": "http://dummyimage.com/793x984.png/cc0000/ffffff",
  "title": "vestibulum velit id pretium iaculis diam erat fermentum justo nec condimentum neque sapien",
}, {
  "img_url": "http://dummyimage.com/699x870.png/5fa2dd/ffffff",
  "title": "fringilla rhoncus mauris enim leo rhoncus sed vestibulum sit amet cursus id turpis integer",
}, {
  "img_url": "http://dummyimage.com/536x703.png/5fa2dd/ffffff",
  "title": "congue diam id ornare imperdiet sapien urna pretium nisl ut volutpat",
}, {
  "img_url": "http://dummyimage.com/710x990.png/cc0000/ffffff",
  "title": "elementum in hac habitasse platea dictumst morbi vestibulum velit",
}, {
  "img_url": "http://dummyimage.com/922x833.png/cc0000/ffffff",
  "title": "posuere felis sed lacus morbi sem mauris laoreet ut",
}, {
  "img_url": "http://dummyimage.com/741x858.png/ff4444/ffffff",
  "title": "quis orci nullam molestie nibh in lectus pellentesque at nulla suspendisse potenti cras",
}, {
  "img_url": "http://dummyimage.com/1000x644.png/cc0000/ffffff",
  "title": "eget tempus vel pede morbi porttitor lorem id ligula suspendisse ornare consequat lectus in est",
}, {
  "img_url": "http://dummyimage.com/841x964.png/5fa2dd/ffffff",
  "title": "sed augue aliquam erat volutpat in congue etiam justo etiam pretium",
}, {
  "img_url": "http://dummyimage.com/977x929.png/cc0000/ffffff",
  "title": "ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae mauris viverra diam",
}, {
  "img_url": "http://dummyimage.com/571x938.png/ff4444/ffffff",
  "title": "velit eu est congue elementum in hac",
}, {
  "img_url": "http://dummyimage.com/639x949.png/cc0000/ffffff",
  "title": "sollicitudin ut suscipit a feugiat et eros vestibulum ac est lacinia nisi venenatis tristique",
}, {
  "img_url": "http://dummyimage.com/634x683.png/5fa2dd/ffffff",
  "title": "curabitur convallis duis consequat dui nec nisi volutpat eleifend donec",
}, {
  "img_url": "http://dummyimage.com/743x747.png/dddddd/000000",
  "title": "erat curabitur gravida nisi at nibh in hac habitasse",
}, {
  "img_url": "http://dummyimage.com/538x920.png/dddddd/000000",
  "title": "dolor sit amet consectetuer adipiscing elit proin interdum mauris non ligula pellentesque ultrices phasellus id",
}, {
  "img_url": "http://dummyimage.com/909x716.png/5fa2dd/ffffff",
  "title": "id pretium iaculis diam erat fermentum justo nec",
}, {
  "img_url": "http://dummyimage.com/618x612.png/5fa2dd/ffffff",
  "title": "faucibus orci luctus et ultrices posuere cubilia curae duis faucibus accumsan odio curabitur convallis duis",
}, {
  "img_url": "http://dummyimage.com/950x530.png/5fa2dd/ffffff",
  "title": "diam cras pellentesque volutpat dui maecenas tristique est et tempus semper est",
}, {
  "img_url": "http://dummyimage.com/539x560.png/dddddd/000000",
  "title": "porttitor id consequat in consequat ut nulla sed accumsan felis ut at dolor",
}, {
  "img_url": "http://dummyimage.com/550x596.png/dddddd/000000",
  "title": "morbi vel lectus in quam fringilla rhoncus mauris enim leo",
}, {
  "img_url": "http://dummyimage.com/798x858.png/cc0000/ffffff",
  "title": "et magnis dis parturient montes nascetur ridiculus mus vivamus",
}, {
  "img_url": "http://dummyimage.com/973x858.png/dddddd/000000",
  "title": "ultrices mattis odio donec vitae nisi nam",
}, {
  "img_url": "http://dummyimage.com/500x787.png/5fa2dd/ffffff",
  "title": "quisque ut erat curabitur gravida nisi at",
}]

  $.each(testSource, function (index, value) {
    let count =  Math.floor(Math.random() * 600) + 50
    $("#mansory_items").append(
    `
      <figure>
        <img
          src="${value.img_url}"
          alt="A windmill" />
        <figcaption><a href="#">kieuvu_${count+66}</a></figcaption>

        <div class="img__title">
          <h6 class="img__title-text text-overfl-3line "><a href="">${value.title}</a></h6>
        </div>

        <div class="img__impress">
          <div class="img__impress-icon img__impress-save d-flex align-items-center">
              <i class="fas fa-plus-circle"></i>
            </div>
          <div class="d-flex">
            <div class="img__impress-icon img__impress-like d-flex align-items-center">
              <i class="far fa-heart"></i>
              <span style="width:4px"></span>
              <span class="img__impress-count">${count}</span>
            </div>
            <span style="width:12px"></span>
            <div class="img__impress-icon img__impress-download d-flex align-items-center">
              <i class="far fa-save"></i>
              <span style="width:4px"></span>
              <span class="img__impress-count">${count-45}</span>
            </div>
          </div>
        </div>
      </figure>
    `
  )
  });
});
</script>
@stop