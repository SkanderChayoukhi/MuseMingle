<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
  display: grid;
  grid-template-rows: 1fr 10rem auto;
  grid-template-areas: "main" "." "footer";
  overflow-x: hidden;
  background: #fff;
  min-height: 100vh;
  font-family: "Open Sans", sans-serif;
  margin: 0;
  padding: 0;
}
body .footer {
  z-index: 1;
  --footer-background:rgb(164, 7, 7);
  display: grid;
  position: relative;
  grid-area: footer;
  min-height: 12rem;
  position: absolute;
  top: 390%;
  width:100%;
}
.content .footerright{
  padding-right: 50px;
}
.content h1{
  font-family: Protest Revolution;
  position: absolute;
  right: 135px;
  font-size: 45px;
}
body .footer .bubbles {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 1rem;
  background: var(--footer-background);
  filter: url("#blob");
}
.description p{
  color: black;
  text-align: center;
}
body .footer .bubbles .bubble {
  position: absolute;
  left: var(--position, 50%);
  background: var(--footer-background);
  border-radius: 100%;
  -webkit-animation: bubble-size var(--time, 4s) ease-in infinite var(--delay, 0s), bubble-move var(--time, 4s) ease-in infinite var(--delay, 0s);
          animation: bubble-size var(--time, 4s) ease-in infinite var(--delay, 0s), bubble-move var(--time, 4s) ease-in infinite var(--delay, 0s);
  transform: translate(-50%, 100%);
}
body .footer .content {
  z-index: 2;
  display: grid;
  grid-template-columns: 1fr auto;
  grid-gap: 4rem;
  padding: 2rem;
  background: var(--footer-background);
}
body .footer .content a, body .footer .content p {
  color: #F5F7FA;
  text-decoration: none;
}
body .footer .content b {
  color: white;
}
body .footer .content p {
  margin: 0;
  font-size: 0.75rem;
}
body .footer .content .columns {
  display: flex;
  justify-content: start;
  gap:120px;
}
body .footer .content .columns ul{
  list-style-type: disc;
  color: white;
}
body .footer .content > div > div {
  margin: 0.25rem 0;
}
body .footer .content > div > div > * {
  margin-right: 0.5rem;
}
body .footer .content > div .image {
  align-self: center;
  width: 4rem;
  height: 4rem;
  margin: 0.25rem 0;
  background-size: cover;
  background-position: center;
}

@-webkit-keyframes bubble-size {
  0%, 75% {
    width: var(--size, 4rem);
    height: var(--size, 4rem);
  }
  100% {
    width: 0rem;
    height: 0rem;
  }
}

@keyframes bubble-size {
  0%, 75% {
    width: var(--size, 4rem);
    height: var(--size, 4rem);
  }
  100% {
    width: 0rem;
    height: 0rem;
  }
}
@-webkit-keyframes bubble-move {
  0% {
    bottom: -4rem;
  }
  100% {
    bottom: var(--distance, 10rem);
  }
}
@keyframes bubble-move {
  0% {
    bottom: -4rem;
  }
  100% {
    bottom: var(--distance, 10rem);
  }
}
    </style>
</head>
<body>
    
<div class="main"></div>
<div class="footer">
  <div class="bubbles">
    <div class="bubble" style="--size:4.267173427536123rem; --distance:6.090820618086729rem; --position:84.8863589844246%; --time:2.8088855030120623s; --delay:-3.8858898355307776s;"></div>
    <div class="bubble" style="--size:4.93100127106723rem; --distance:9.54932292150212rem; --position:65.87381105545747%; --time:2.4446133367618694s; --delay:-2.834204665265999s;"></div>
    <div class="bubble" style="--size:3.2884006506874384rem; --distance:6.026707278619648rem; --position:-1.4748740777725988%; --time:3.7332100461660738s; --delay:-3.1898144014643783s;"></div>
    <div class="bubble" style="--size:2.639038289810941rem; --distance:6.894086140362419rem; --position:82.18626430006726%; --time:2.6551031172470263s; --delay:-3.5944541293821546s;"></div>
    <div class="bubble" style="--size:2.587267269096608rem; --distance:9.528512016532062rem; --position:101.7458755796887%; --time:2.758931033876457s; --delay:-3.849119534622685s;"></div>
    <div class="bubble" style="--size:2.140625723718185rem; --distance:6.942247319750223rem; --position:59.81184009252547%; --time:2.6444427900905283s; --delay:-2.9727944658817975s;"></div>
    <div class="bubble" style="--size:2.3008476453296565rem; --distance:9.314097277584029rem; --position:73.69688848680957%; --time:3.7075354397991775s; --delay:-3.7269613004593523s;"></div>
    <div class="bubble" style="--size:2.8276639942043156rem; --distance:9.993304771191841rem; --position:101.86481026257736%; --time:3.509917205558486s; --delay:-2.719536160967293s;"></div>
    <div class="bubble" style="--size:3.4098471541043534rem; --distance:7.2993017826587705rem; --position:37.85591790898774%; --time:3.596322771916019s; --delay:-2.354234817202466s;"></div>
    <div class="bubble" style="--size:2.3857345463217rem; --distance:7.966694489398111rem; --position:72.8018772051722%; --time:2.552690400219154s; --delay:-3.874955918932887s;"></div>
    <div class="bubble" style="--size:5.8386637511211745rem; --distance:9.900188393530877rem; --position:99.19582239049794%; --time:3.8959557947818837s; --delay:-3.5176567459194508s;"></div>
    <div class="bubble" style="--size:5.4080051983539725rem; --distance:6.273678797978685rem; --position:91.74410085173945%; --time:2.843946602790724s; --delay:-2.3141419040825135s;"></div>
    <div class="bubble" style="--size:3.6414471515374265rem; --distance:8.245034125795144rem; --position:15.99469329927189%; --time:3.758211469814516s; --delay:-3.2972814449001766s;"></div>
    <div class="bubble" style="--size:5.214114447505777rem; --distance:9.989694872741902rem; --position:60.17303836732242%; --time:3.4911865798231867s; --delay:-3.8482636864070225s;"></div>
    <div class="bubble" style="--size:5.433632153176295rem; --distance:8.94038321727112rem; --position:92.88778385796242%; --time:2.2662373762168664s; --delay:-2.8124496099987133s;"></div>
    <div class="bubble" style="--size:4.659003704374939rem; --distance:7.195482494905585rem; --position:40.948061974613346%; --time:3.5905299018910015s; --delay:-3.349546922155615s;"></div>
    <div class="bubble" style="--size:4.338219617601669rem; --distance:8.953473814044525rem; --position:72.32393106748317%; --time:2.004838956924025s; --delay:-2.8895241643225105s;"></div>
    <div class="bubble" style="--size:5.526639254655947rem; --distance:7.893619972039274rem; --position:62.47824697366346%; --time:3.1612845516057604s; --delay:-2.6501320252179235s;"></div>
    <div class="bubble" style="--size:4.346583995483887rem; --distance:7.3095667787600735rem; --position:38.59115469420244%; --time:2.021995116423671s; --delay:-2.79622221205777s;"></div>
    <div class="bubble" style="--size:4.1860046030300335rem; --distance:6.6679638711684515rem; --position:-4.872284029168514%; --time:3.382558250815272s; --delay:-2.7859270164140875s;"></div>
    <div class="bubble" style="--size:3.0939414844443593rem; --distance:9.508569125246774rem; --position:6.945408740609826%; --time:3.2439068299448417s; --delay:-2.991894477988042s;"></div>
    <div class="bubble" style="--size:2.315643768741272rem; --distance:9.26576792407667rem; --position:67.18408256199612%; --time:3.1364013920902374s; --delay:-2.35416748734554s;"></div>
    <div class="bubble" style="--size:3.053612707757341rem; --distance:8.450738405604543rem; --position:1.5268861771405362%; --time:2.0008343643981243s; --delay:-3.973913896374099s;"></div>
    <div class="bubble" style="--size:2.3944582446479616rem; --distance:8.872544918677143rem; --position:58.59115675089435%; --time:3.500578139193083s; --delay:-2.5092113192712633s;"></div>
    <div class="bubble" style="--size:4.6296954927059115rem; --distance:7.750219630796603rem; --position:93.27361776853567%; --time:2.9822048927256186s; --delay:-3.1368167480040245s;"></div>
    <div class="bubble" style="--size:5.1628614186188795rem; --distance:9.631572580931987rem; --position:11.580998819619353%; --time:3.878058699278384s; --delay:-3.4562471924172082s;"></div>
    <div class="bubble" style="--size:4.901749111159465rem; --distance:8.236289763468957rem; --position:84.77456557123068%; --time:3.8672069766975947s; --delay:-3.195599949830838s;"></div>
    <div class="bubble" style="--size:4.957159421027728rem; --distance:8.88982563600825rem; --position:87.10227025195704%; --time:3.80079830453367s; --delay:-2.9431083876972144s;"></div>
    <div class="bubble" style="--size:3.4903301025521785rem; --distance:6.548297890935512rem; --position:23.474300709419058%; --time:3.112265571070325s; --delay:-3.086256570244089s;"></div>
    <div class="bubble" style="--size:4.9193600407018785rem; --distance:9.816262613756486rem; --position:27.273310727147802%; --time:3.305627130179036s; --delay:-3.1952212946212764s;"></div>
    <div class="bubble" style="--size:2.885084642613407rem; --distance:6.79499605805449rem; --position:64.90917356030724%; --time:3.2320373187558915s; --delay:-2.0264781083761614s;"></div>
    <div class="bubble" style="--size:2.784622037606491rem; --distance:8.439937914630402rem; --position:94.55183645355298%; --time:3.202531071745084s; --delay:-3.8580631200115s;"></div>
    <div class="bubble" style="--size:5.726826002340259rem; --distance:8.881012311582337rem; --position:51.1017014137374%; --time:3.5852775425614194s; --delay:-2.153771247557912s;"></div>
    <div class="bubble" style="--size:2.5057182183471127rem; --distance:7.651447464261764rem; --position:77.85605179820365%; --time:3.969412167966191s; --delay:-3.1607798713589927s;"></div>
    <div class="bubble" style="--size:2.961240449957563rem; --distance:6.134319606298852rem; --position:72.5530404558623%; --time:2.64972303789639s; --delay:-2.3098501572384134s;"></div>
    <div class="bubble" style="--size:4.365454144547352rem; --distance:7.578092970343836rem; --position:57.647702961557755%; --time:3.2068012797214043s; --delay:-2.962675676262208s;"></div>
    <div class="bubble" style="--size:5.200072850195649rem; --distance:7.848107698738799rem; --position:66.34272125365925%; --time:3.0846410641469646s; --delay:-3.698972692403219s;"></div>
    <div class="bubble" style="--size:5.110650339561504rem; --distance:8.995315853159028rem; --position:16.751818882491953%; --time:3.8176616183680423s; --delay:-2.0038413650319s;"></div>
    <div class="bubble" style="--size:4.12323066446367rem; --distance:6.888037753076558rem; --position:27.937562101973064%; --time:2.9769542305690733s; --delay:-2.790661652220275s;"></div>
    <div class="bubble" style="--size:5.832994426538658rem; --distance:7.277299765065861rem; --position:63.838342672403485%; --time:3.9745271328968594s; --delay:-2.3514884565531777s;"></div>
    <div class="bubble" style="--size:3.2505762582424556rem; --distance:9.091309892339979rem; --position:38.65027227932615%; --time:2.2536727191983013s; --delay:-2.6331496433321915s;"></div>
    <div class="bubble" style="--size:2.8578850172123973rem; --distance:8.483110891712403rem; --position:84.51755782495398%; --time:2.4527896561576554s; --delay:-2.2525691482795667s;"></div>
    <div class="bubble" style="--size:3.61453079983293rem; --distance:7.176385902403948rem; --position:11.984406111947404%; --time:2.9424281310626026s; --delay:-2.5816254814450246s;"></div>
    <div class="bubble" style="--size:2.0694342677183233rem; --distance:8.05835142311869rem; --position:-2.657168367106446%; --time:3.1012439823026328s; --delay:-2.4568108804478834s;"></div>
    <div class="bubble" style="--size:2.28292019029554rem; --distance:7.767406630320655rem; --position:8.980871323401063%; --time:2.4227894316768785s; --delay:-2.800308094258297s;"></div>
    <div class="bubble" style="--size:3.610565765747265rem; --distance:6.333398856612463rem; --position:31.620266075920163%; --time:2.898427056673656s; --delay:-2.503928280692706s;"></div>
    <div class="bubble" style="--size:3.503974114065077rem; --distance:8.901776599632317rem; --position:26.211241775400403%; --time:2.9339076342278574s; --delay:-2.6566277548158928s;"></div>
    <div class="bubble" style="--size:5.992738179973392rem; --distance:8.978555718710389rem; --position:100.87595090463316%; --time:3.0178758600367606s; --delay:-3.983490833823621s;"></div>
    <div class="bubble" style="--size:4.007931707740072rem; --distance:7.1761728341562065rem; --position:48.0920250114324%; --time:3.7522844826013797s; --delay:-2.3413807605085206s;"></div>
    <div class="bubble" style="--size:2.9828662669725885rem; --distance:9.301780592688818rem; --position:79.37471842914641%; --time:2.563398688165006s; --delay:-2.3574840142530546s;"></div>
    <div class="bubble" style="--size:5.5980579920131985rem; --distance:7.974275927746499rem; --position:99.5566458819483%; --time:3.501646113799518s; --delay:-3.590987437187809s;"></div>
    <div class="bubble" style="--size:4.716489596861232rem; --distance:8.729138057102535rem; --position:35.365754438482014%; --time:3.7443702631749707s; --delay:-3.4984725094222417s;"></div>
    <div class="bubble" style="--size:3.546955115242448rem; --distance:7.685983999020363rem; --position:63.57864679061761%; --time:3.8230629238700313s; --delay:-3.185925931726523s;"></div>
    <div class="bubble" style="--size:4.714652931628143rem; --distance:9.179099531894865rem; --position:60.49315803181756%; --time:2.727314962094136s; --delay:-3.4263230449384374s;"></div>
    <div class="bubble" style="--size:2.777891088756707rem; --distance:7.797033288253348rem; --position:82.01226336500952%; --time:2.7787744646647314s; --delay:-2.0636476586059502s;"></div>
    <div class="bubble" style="--size:2.2528355040502603rem; --distance:7.218827884721722rem; --position:8.082786519138685%; --time:3.295230617488641s; --delay:-3.8578556389185534s;"></div>
    <div class="bubble" style="--size:4.58159347854134rem; --distance:6.921891428461258rem; --position:58.24128575614623%; --time:3.6711271980654514s; --delay:-2.9700749468837238s;"></div>
    <div class="bubble" style="--size:2.5426428531566607rem; --distance:9.538676613769024rem; --position:86.05842450068285%; --time:2.725178581902234s; --delay:-2.130521207629475s;"></div>
    <div class="bubble" style="--size:5.482184206560786rem; --distance:8.457358515223284rem; --position:-4.934667454891157%; --time:3.3676460258901804s; --delay:-3.9810934837360885s;"></div>
    <div class="bubble" style="--size:5.6567863087666055rem; --distance:6.460475941921976rem; --position:61.38576708581951%; --time:3.198342828444102s; --delay:-2.247524765039194s;"></div>
    <div class="bubble" style="--size:5.775190575640054rem; --distance:8.77785223718454rem; --position:68.87687579273393%; --time:3.035009531642905s; --delay:-3.540614585070256s;"></div>
    <div class="bubble" style="--size:4.34128467108763rem; --distance:6.15307681478892rem; --position:-2.484966985299808%; --time:2.934168692229768s; --delay:-2.8427856207449733s;"></div>
    <div class="bubble" style="--size:2.6592751560032903rem; --distance:8.208482169590386rem; --position:63.9331237109258%; --time:3.936872209253644s; --delay:-2.971545260275037s;"></div>
    <div class="bubble" style="--size:5.814997433861971rem; --distance:8.353110847837586rem; --position:54.89642744949084%; --time:3.1704968290239908s; --delay:-2.609863766966632s;"></div>
    <div class="bubble" style="--size:3.3865321300494786rem; --distance:7.157237225654701rem; --position:104.97714304863246%; --time:2.4856366028952936s; --delay:-3.324974395580582s;"></div>
    <div class="bubble" style="--size:2.7803877112456084rem; --distance:9.624257802224957rem; --position:50.9231348228749%; --time:3.520678676153719s; --delay:-2.2781463592329105s;"></div>
    <div class="bubble" style="--size:2.4888391466122037rem; --distance:9.604801107943754rem; --position:70.74403067595988%; --time:3.8854078423710976s; --delay:-3.7532049729298387s;"></div>
    <div class="bubble" style="--size:5.747806070139953rem; --distance:6.146550668084084rem; --position:23.52923641585126%; --time:3.246317107708158s; --delay:-2.7126504246632126s;"></div>
    <div class="bubble" style="--size:2.970646371366544rem; --distance:9.124456232065004rem; --position:1.7874307349900338%; --time:2.9412321301894595s; --delay:-2.022284855526232s;"></div>
    <div class="bubble" style="--size:5.408542455215968rem; --distance:8.361239105239846rem; --position:101.21964334682222%; --time:3.1497208951297484s; --delay:-3.496208157020121s;"></div>
    <div class="bubble" style="--size:2.3450428149411193rem; --distance:9.826710398295054rem; --position:45.17299944756949%; --time:3.837895731836643s; --delay:-3.108031766808155s;"></div>
    <div class="bubble" style="--size:5.004630399578469rem; --distance:8.185062777717295rem; --position:94.03635558350109%; --time:2.3192623308632205s; --delay:-3.973021315563655s;"></div>
    <div class="bubble" style="--size:4.805007174285214rem; --distance:7.534863556195698rem; --position:24.57204868851961%; --time:2.584009748103409s; --delay:-3.5020863547359147s;"></div>
    <div class="bubble" style="--size:3.0845011769323394rem; --distance:7.309436721506448rem; --position:56.97452161847971%; --time:3.1627288676196743s; --delay:-3.713886469193828s;"></div>
    <div class="bubble" style="--size:3.4036207615874563rem; --distance:8.34177498411489rem; --position:84.93747145836373%; --time:3.6221457824099654s; --delay:-2.4882791345681334s;"></div>
    <div class="bubble" style="--size:4.509679945676654rem; --distance:6.817090829209033rem; --position:85.54047587460516%; --time:3.568435712017543s; --delay:-2.0507455133266586s;"></div>
    <div class="bubble" style="--size:5.921232797738677rem; --distance:7.692671568827195rem; --position:32.276226599743474%; --time:3.9121193580143023s; --delay:-3.990888221280557s;"></div>
    <div class="bubble" style="--size:5.178467157247605rem; --distance:6.1957055204477385rem; --position:7.336952001609841%; --time:3.3064231193003293s; --delay:-3.142860451509071s;"></div>
    <div class="bubble" style="--size:2.7705459671644137rem; --distance:7.000890201126029rem; --position:37.47529487439638%; --time:3.1775218736640904s; --delay:-3.7579658230769075s;"></div>
    <div class="bubble" style="--size:4.1822523997848675rem; --distance:8.038717703584082rem; --position:87.79606764973684%; --time:3.155689901097092s; --delay:-2.0190370739018784s;"></div>
    <div class="bubble" style="--size:3.7250342367103206rem; --distance:7.370598427477918rem; --position:55.7392248601861%; --time:2.251070494588244s; --delay:-2.550572614190059s;"></div>
    <div class="bubble" style="--size:4.820273313942912rem; --distance:9.232184046603411rem; --position:72.09798296863076%; --time:2.0818020028884225s; --delay:-2.8287856159734917s;"></div>
    <div class="bubble" style="--size:5.582601795239964rem; --distance:9.820005646253883rem; --position:102.68804207650673%; --time:2.163623357271495s; --delay:-2.132658718697899s;"></div>
    <div class="bubble" style="--size:2.317595035478516rem; --distance:8.18472984336451rem; --position:2.6379491251759113%; --time:3.7504037563682s; --delay:-2.9008911872357457s;"></div>
    <div class="bubble" style="--size:3.2174090719132655rem; --distance:8.418852158735rem; --position:38.276534934196846%; --time:3.0674892578759607s; --delay:-2.5111233419453494s;"></div>
    <div class="bubble" style="--size:2.598615615634645rem; --distance:6.31495354146898rem; --position:30.9766819539161%; --time:2.2589398387012976s; --delay:-2.2304373829408854s;"></div>
    <div class="bubble" style="--size:5.553991256620108rem; --distance:6.664620795310553rem; --position:74.64659910248372%; --time:2.3385185529696453s; --delay:-3.4177465806410057s;"></div>
    <div class="bubble" style="--size:2.4960439234513103rem; --distance:8.450743299204767rem; --position:52.542497255245756%; --time:2.78131735062931s; --delay:-3.1160455785651315s;"></div>
    <div class="bubble" style="--size:2.41263196000621rem; --distance:9.67662549018512rem; --position:17.744349836118147%; --time:3.9456370236937754s; --delay:-2.6729587575243303s;"></div>
    <div class="bubble" style="--size:5.751535116115072rem; --distance:8.86729529822476rem; --position:58.18624902404714%; --time:3.536735088706318s; --delay:-3.863222056769462s;"></div>
    <div class="bubble" style="--size:4.993449489302613rem; --distance:8.219092309351744rem; --position:25.567981124342523%; --time:2.909768996139642s; --delay:-3.216962971338936s;"></div>
    <div class="bubble" style="--size:2.8695692272252806rem; --distance:8.707353117231062rem; --position:86.71470811291803%; --time:2.897873173326113s; --delay:-2.540648194669538s;"></div>
    <div class="bubble" style="--size:4.80441404254751rem; --distance:6.000653248765734rem; --position:0.041690993656525066%; --time:3.391251498504263s; --delay:-3.0252938816108856s;"></div>
    <div class="bubble" style="--size:4.555954729647299rem; --distance:6.47080528463753rem; --position:100.13668553992585%; --time:3.7345417035182034s; --delay:-3.7459626102948738s;"></div>
    <div class="bubble" style="--size:2.952167148807673rem; --distance:9.501697070083605rem; --position:55.06489604004589%; --time:3.541190786839539s; --delay:-2.113669216635543s;"></div>
    <div class="bubble" style="--size:5.567481129611746rem; --distance:9.165436328009427rem; --position:68.87460198631564%; --time:3.3059145867141853s; --delay:-3.1121574664657s;"></div>
    <div class="bubble" style="--size:3.2103397325061236rem; --distance:6.885997764019286rem; --position:84.4396163561044%; --time:3.6481803007398907s; --delay:-2.8303965112263922s;"></div>
    <div class="bubble" style="--size:2.2663043322282217rem; --distance:6.645178947684556rem; --position:20.72193998726123%; --time:2.4150150190436315s; --delay:-2.6690128700635904s;"></div>
    <div class="bubble" style="--size:2.174407682529317rem; --distance:6.144875213145654rem; --position:95.34578578004887%; --time:2.9847799825971335s; --delay:-3.9100972153071316s;"></div>
    <div class="bubble" style="--size:5.274621180960488rem; --distance:8.85975578971089rem; --position:55.653075131929796%; --time:2.749667977756886s; --delay:-2.6695832083003013s;"></div>
    <div class="bubble" style="--size:2.7357907990721833rem; --distance:7.753915807026716rem; --position:42.482175995612636%; --time:3.417959373206292s; --delay:-3.0710054216048697s;"></div>
    <div class="bubble" style="--size:2.065920457833771rem; --distance:8.004231477939708rem; --position:51.90646291155096%; --time:3.381518294100136s; --delay:-2.6240905479950514s;"></div>
    <div class="bubble" style="--size:3.5632570297147232rem; --distance:9.820458898566969rem; --position:76.02549255313208%; --time:2.7922537750394496s; --delay:-3.7041604554709027s;"></div>
    <div class="bubble" style="--size:2.8159134602087432rem; --distance:6.490177603972539rem; --position:102.00048570821434%; --time:2.7950559888266513s; --delay:-3.299287612141891s;"></div>
    <div class="bubble" style="--size:5.305934459199441rem; --distance:7.316254678930783rem; --position:42.829247721933456%; --time:3.74418208394141s; --delay:-3.9875949159297006s;"></div>
    <div class="bubble" style="--size:4.924485493466272rem; --distance:7.200115698490412rem; --position:56.63697860415753%; --time:2.3900844923434046s; --delay:-3.133084818330787s;"></div>
    <div class="bubble" style="--size:3.9406861603694754rem; --distance:8.766859703061183rem; --position:83.46790675270135%; --time:2.447020357243225s; --delay:-3.5042350779944016s;"></div>
    <div class="bubble" style="--size:3.263454275912504rem; --distance:8.690114610800933rem; --position:48.887327396622965%; --time:2.817859345975033s; --delay:-3.6274020127319346s;"></div>
    <div class="bubble" style="--size:5.630374105134027rem; --distance:8.32175811474037rem; --position:12.596551918354898%; --time:3.1776087683380125s; --delay:-3.371895329860505s;"></div>
    <div class="bubble" style="--size:4.375422301056958rem; --distance:9.391347852705715rem; --position:72.07792212563913%; --time:2.5780303809682916s; --delay:-2.6748503865546187s;"></div>
    <div class="bubble" style="--size:3.3901463884812495rem; --distance:8.043087743867646rem; --position:3.4678622012533395%; --time:3.1886973467861726s; --delay:-2.47036879477146s;"></div>
    <div class="bubble" style="--size:3.108638709189413rem; --distance:8.982457526306812rem; --position:58.966008037730376%; --time:3.3422900456257794s; --delay:-3.3770533942687195s;"></div>
    <div class="bubble" style="--size:3.6659500320493263rem; --distance:7.769104324083226rem; --position:7.265960345509285%; --time:3.775993957071998s; --delay:-2.669569889476798s;"></div>
    <div class="bubble" style="--size:2.512059014541421rem; --distance:9.562469286019276rem; --position:55.47862462591648%; --time:3.5024534905650926s; --delay:-3.648241190624539s;"></div>
    <div class="bubble" style="--size:2.5521660782346025rem; --distance:9.235328790971664rem; --position:62.369715972896074%; --time:2.1854844731128056s; --delay:-2.9265146236141413s;"></div>
    <div class="bubble" style="--size:5.427091095356967rem; --distance:7.071648297015291rem; --position:66.60638626358784%; --time:3.327296327641355s; --delay:-2.2005238746490257s;"></div>
    <div class="bubble" style="--size:5.189249747104849rem; --distance:7.4143607899525rem; --position:86.52422774374375%; --time:2.902621027132363s; --delay:-3.679615840739995s;"></div>
    <div class="bubble" style="--size:3.244820078600249rem; --distance:8.926320139537886rem; --position:22.750887577942144%; --time:3.8754541984060715s; --delay:-3.8936491636299526s;"></div>
    <div class="bubble" style="--size:5.60948748406498rem; --distance:8.370893722156232rem; --position:45.9229782444224%; --time:3.424190364275704s; --delay:-3.796463285790205s;"></div>
    <div class="bubble" style="--size:2.4822117339789314rem; --distance:6.652651702835865rem; --position:34.01523199004473%; --time:3.567298825439559s; --delay:-2.065978909028125s;"></div>
    <div class="bubble" style="--size:5.000478269382887rem; --distance:6.929143881435119rem; --position:98.30904183094623%; --time:3.8441143399728053s; --delay:-2.1428542269252984s;"></div>
    <div class="bubble" style="--size:3.253055420591754rem; --distance:8.327629488985728rem; --position:71.82145127362772%; --time:3.4597772629016856s; --delay:-3.4100698795374247s;"></div>
    <div class="bubble" style="--size:2.16147614446138rem; --distance:8.682924310894016rem; --position:96.3064637014941%; --time:2.8586409516513935s; --delay:-3.406404541944278s;"></div>
    <div class="bubble" style="--size:3.643840642341317rem; --distance:6.274729156204333rem; --position:99.38288681815301%; --time:3.5770631233645154s; --delay:-2.0862672778113525s;"></div>
    <div class="bubble" style="--size:5.580909326629042rem; --distance:9.739264014113274rem; --position:-2.5433007735450675%; --time:2.081931800215822s; --delay:-2.0409116847132815s;"></div>
    <div class="bubble" style="--size:3.084845681079937rem; --distance:8.068145163465294rem; --position:67.78965530750268%; --time:2.01802258142646s; --delay:-2.2139486524199365s;"></div>
    <div class="bubble" style="--size:3.159812128334438rem; --distance:8.334583171068997rem; --position:87.67501042648445%; --time:3.1584610553092514s; --delay:-3.984396157695145s;"></div>
    <div class="bubble" style="--size:2.117335524021515rem; --distance:8.414297765131654rem; --position:28.411649430263992%; --time:3.4717339082871206s; --delay:-3.3990610025319645s;"></div>
  </div>
  <div class="content">
    <div class="columns">
      <div>
      <b>Links</b>
      <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Categories</a></li>
      <li><a href="#">Contact_us</a></li>
      <li><a href="#">Games</a></li>
      </ul></div>
      <div>
      <b>Categories</b>
      <ul>
      <li><a href="#">All</a></li>
      <li><a href="#">Paintings</a></li>
      <li><a href="#">Drawings</a></li>
      <li><a href="#">Photography</a></li>
      </ul></div>
      <div>
      <b>Games</b>
      <ul>
      <li><a href="#">Hang-Man</a></li>
      <li><a href="#">Quiz</a></li>
      <li><a href="#">Flip-Cards</a></li>
      </ul></div>
      <div class="description">
      <h1>MuseMingle</h1><br><br><br><br>
      <p style="color:black">Plongez dans notre univers artistique, où chaque création raconte une histoire et chaque détail est une invitation à l'émerveillement</p>
      </div>
    <div class="footerright">
     <p>©2024 Our Creaters: <br> Ahmed Majid Salhi <br> Arji Ezzahi <br> Youssef Dhouib <br> Rana Chouchen <br> Narjess HadjMohamed <br> Nour Taieb</p>
      <br>
      <p></p>
    </div>
  </div>
</div>
<svg style="position:fixed; top:100vh">
  <defs>
    <filter id="blob">
      <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur"></feGaussianBlur>
      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="blob"></feColorMatrix>
    </filter>
  </defs>
</svg>
    
</body>
</html>