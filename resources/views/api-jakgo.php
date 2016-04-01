<!DOCTYPE html><html><head><meta charset="utf-8"><title>API jakgo</title><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"><style>@import url('https://fonts.googleapis.com/css?family=Roboto:400,700|Inconsolata|Raleway:200');@import url('https://fonts.googleapis.com/css?family=Roboto:100,400,700|Source+Code+Pro');.hljs-comment,.hljs-title{color:#8e908c}.hljs-variable,.hljs-attribute,.hljs-tag,.hljs-regexp,.ruby .hljs-constant,.xml .hljs-tag .hljs-title,.xml .hljs-pi,.xml .hljs-doctype,.html .hljs-doctype,.css .hljs-id,.css .hljs-class,.css .hljs-pseudo{color:#c82829}.hljs-number,.hljs-preprocessor,.hljs-pragma,.hljs-built_in,.hljs-literal,.hljs-params,.hljs-constant{color:#f5871f}.ruby .hljs-class .hljs-title,.css .hljs-rules .hljs-attribute{color:#eab700}.hljs-string,.hljs-value,.hljs-inheritance,.hljs-header,.ruby .hljs-symbol,.xml .hljs-cdata{color:#718c00}.css .hljs-hexcolor{color:#3e999f}.hljs-function,.python .hljs-decorator,.python .hljs-title,.ruby .hljs-function .hljs-title,.ruby .hljs-title .hljs-keyword,.perl .hljs-sub,.javascript .hljs-title,.coffeescript .hljs-title{color:#4271ae}.hljs-keyword,.javascript .hljs-function{color:#8959a8}.hljs{display:block;background:white;color:#4d4d4c;padding:.5em}.coffeescript .javascript,.javascript .xml,.tex .hljs-formula,.xml .javascript,.xml .vbscript,.xml .css,.xml .hljs-cdata{opacity:.5}.right .hljs-comment{color:#969896}.right .css .hljs-class,.right .css .hljs-id,.right .css .hljs-pseudo,.right .hljs-attribute,.right .hljs-regexp,.right .hljs-tag,.right .hljs-variable,.right .html .hljs-doctype,.right .ruby .hljs-constant,.right .xml .hljs-doctype,.right .xml .hljs-pi,.right .xml .hljs-tag .hljs-title{color:#c66}.right .hljs-built_in,.right .hljs-constant,.right .hljs-literal,.right .hljs-number,.right .hljs-params,.right .hljs-pragma,.right .hljs-preprocessor{color:#de935f}.right .css .hljs-rule .hljs-attribute,.right .ruby .hljs-class .hljs-title{color:#f0c674}.right .hljs-header,.right .hljs-inheritance,.right .hljs-name,.right .hljs-string,.right .hljs-value,.right .ruby .hljs-symbol,.right .xml .hljs-cdata{color:#b5bd68}.right .css .hljs-hexcolor,.right .hljs-title{color:#8abeb7}.right .coffeescript .hljs-title,.right .hljs-function,.right .javascript .hljs-title,.right .perl .hljs-sub,.right .python .hljs-decorator,.right .python .hljs-title,.right .ruby .hljs-function .hljs-title,.right .ruby .hljs-title .hljs-keyword{color:#81a2be}.right .hljs-keyword,.right .javascript .hljs-function{color:#b294bb}.right .hljs{display:block;overflow-x:auto;background:#1d1f21;color:#c5c8c6;padding:.5em;-webkit-text-size-adjust:none}.right .coffeescript .javascript,.right .javascript .xml,.right .tex .hljs-formula,.right .xml .css,.right .xml .hljs-cdata,.right .xml .javascript,.right .xml .vbscript{opacity:.5}.hljs-comment{color:#969896}.css .hljs-class,.css .hljs-id,.css .hljs-pseudo,.hljs-attribute,.hljs-regexp,.hljs-tag,.hljs-variable,.html .hljs-doctype,.ruby .hljs-constant,.xml .hljs-doctype,.xml .hljs-pi,.xml .hljs-tag .hljs-title{color:#77A619}.hljs-literal{color:#A69819}.hljs-built_in,.hljs-constant,.hljs-number,.hljs-params,.hljs-pragma,.hljs-preprocessor{color:#1B88B3}.css .hljs-rule .hljs-attribute,.ruby .hljs-class .hljs-title{color:#A37518}.hljs-header,.hljs-inheritance,.hljs-name,.hljs-string,.hljs-value,.ruby .hljs-symbol,.xml .hljs-cdata{color:inherit}.coffeescript .hljs-title,.css .hljs-hexcolor,.hljs-function,.hljs-title,.javascript .hljs-title,.perl .hljs-sub,.python .hljs-decorator,.python .hljs-title,.ruby .hljs-function .hljs-title,.ruby .hljs-title .hljs-keyword{color:#A63A4A}.hljs-keyword,.javascript .hljs-function{color:#A69819}.hljs{display:block;overflow-x:auto;background:#1d1f21;color:#c5c8c6;padding:.5em;-webkit-text-size-adjust:none}.coffeescript .javascript,.javascript .xml,.tex .hljs-formula,.xml .css,.xml .hljs-cdata,.xml .javascript,.xml .vbscript{opacity:.5}.right .hljs-comment{color:#969896}.right .css .hljs-class,.right .css .hljs-id,.right .css .hljs-pseudo,.right .hljs-attribute,.right .hljs-regexp,.right .hljs-tag,.right .hljs-variable,.right .html .hljs-doctype,.right .ruby .hljs-constant,.right .xml .hljs-doctype,.right .xml .hljs-pi,.right .xml .hljs-tag .hljs-title{color:#C1EF65}.right .hljs-literal{color:#EBDE68}.right .hljs-built_in,.right .hljs-constant,.right .hljs-number,.right .hljs-params,.right .hljs-pragma,.right .hljs-preprocessor{color:#77BCD7}.right .css .hljs-rule .hljs-attribute,.right .ruby .hljs-class .hljs-title{color:#f0c674}.right .hljs-header,.right .hljs-inheritance,.right .hljs-name,.right .hljs-string,.right .hljs-value,.right .ruby .hljs-symbol,.right .xml .hljs-cdata{color:inherit}.right .coffeescript .hljs-title,.right .css .hljs-hexcolor,.right .hljs-function,.right .hljs-title,.right .javascript .hljs-title,.right .perl .hljs-sub,.right .python .hljs-decorator,.right .python .hljs-title,.right .ruby .hljs-function .hljs-title,.right .ruby .hljs-title .hljs-keyword{color:#f099a6}.right .hljs-keyword,.right .javascript .hljs-function{color:#EBDE68}.right .hljs{display:block;overflow-x:auto;background:#1d1f21;color:#c5c8c6;padding:.5em;-webkit-text-size-adjust:none}.right .coffeescript .javascript,.right .javascript .xml,.right .tex .hljs-formula,.right .xml .css,.right .xml .hljs-cdata,.right .xml .javascript,.right .xml .vbscript{opacity:.5}body{color:#4c555a;background:white;font:400 14px / 1.42 'Roboto',Helvetica,sans-serif}header{border-bottom:1px solid transparent;margin-bottom:12px}h1,h2,h3,h4,h5{color:#292e31;margin:12px 0}h1 .permalink,h2 .permalink,h3 .permalink,h4 .permalink,h5 .permalink{margin-left:0;opacity:0;transition:opacity .25s ease}h1:hover .permalink,h2:hover .permalink,h3:hover .permalink,h4:hover .permalink,h5:hover .permalink{opacity:1}.triple h1 .permalink,.triple h2 .permalink,.triple h3 .permalink,.triple h4 .permalink,.triple h5 .permalink{opacity:.15}.triple h1:hover .permalink,.triple h2:hover .permalink,.triple h3:hover .permalink,.triple h4:hover .permalink,.triple h5:hover .permalink{opacity:.15}h1{font:100 36px 'Roboto',Helvetica,sans-serif;font-size:36px}h2{font:100 36px 'Roboto',Helvetica,sans-serif;font-size:30px}h3{font-size:100%;text-transform:uppercase}h5{font-size:100%;font-weight:normal}p{margin:0 0 10px}p.choices{line-height:1.6}a{color:#0099e5;text-decoration:none}li p{margin:0}hr.split{border:0;height:1px;width:100%;padding-left:6px;margin:12px auto;background-image:linear-gradient(to right, rgba(76,85,90,0) 20%, rgba(76,85,90,0.2) 48%, rgba(221,228,232,0.2) 48%, rgba(221,228,232,0) 80%)}dl dt{float:left;width:130px;clear:left;text-align:right;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;font-weight:700}dl dd{margin-left:150px}blockquote{color:rgba(76,85,90,0.5);font-size:15.5px;padding:10px 20px;margin:12px 0;border-left:5px solid #e8e8e8}blockquote p:last-child{margin-bottom:0}pre{background-color:#f5f5f5;padding:12px;border:1px solid #cfcfcf;border-radius:3px;overflow:auto}pre code{color:#4c555a;background-color:transparent;padding:0;border:none}code{color:#b93d6a;background-color:#f5f5f5;font:13px / 19.5px 'Source Code Pro',Menlo,monospace;padding:1px 4px;border:1px solid #cfcfcf;border-radius:3px}ul,ol{padding-left:2em}table{border-collapse:collapse;border-spacing:0;margin-bottom:12px}table tr:nth-child(2n){background-color:#fafafa}table th,table td{padding:6px 12px;border:1px solid #e6e6e6}.text-muted{opacity:.5}.note,.warning{padding:.3em 1em;margin:1em 0;border-radius:2px;font-size:90%}.note h1,.warning h1,.note h2,.warning h2,.note h3,.warning h3,.note h4,.warning h4,.note h5,.warning h5,.note h6,.warning h6{font-family:100 36px 'Roboto',Helvetica,sans-serif;font-size:135%;font-weight:500}.note p,.warning p{margin:.5em 0}.note{color:#4c555a;background-color:#ebf7fd;border-left:4px solid #0099e5}.note h1,.note h2,.note h3,.note h4,.note h5,.note h6{color:#0099e5}.warning{color:#4c555a;background-color:#faf0f4;border-left:4px solid #B82E5F}.warning h1,.warning h2,.warning h3,.warning h4,.warning h5,.warning h6{color:#B82E5F}header{margin-top:24px}nav{position:fixed;top:24px;bottom:0;overflow-y:auto}nav .resource-group{padding:0}nav .resource-group .heading{position:relative}nav .resource-group .heading .chevron{position:absolute;top:12px;right:12px;opacity:.5}nav .resource-group .heading a{display:block;color:#4c555a;opacity:.7;border-left:2px solid transparent;margin:0}nav .resource-group .heading a:hover{text-decoration:underline;background-color:transparent;border-left:2px solid transparent}nav ul{list-style-type:none;padding-left:0}nav ul a{display:block;font-size:13px;color:rgba(76,85,90,0.7);padding:8px 12px;border-top:1px solid transparent;border-left:2px solid transparent;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}nav ul a:hover{text-decoration:underline;background-color:transparent;border-left:2px solid transparent}nav ul>li{margin:0}nav ul>li:first-child{margin-top:-12px}nav ul>li:last-child{margin-bottom:-12px}nav ul ul a{padding-left:24px}nav ul ul li{margin:0}nav ul ul li:first-child{margin-top:0}nav ul ul li:last-child{margin-bottom:0}nav>div>div>ul>li:first-child>a{border-top:none}.preload *{transition:none !important}.pull-left{float:left}.pull-right{float:right}.badge{display:inline-block;float:right;min-width:10px;min-height:14px;padding:3px 7px;font-size:12px;color:black;background-color:transparent;border-radius:10px;margin:-2px -8px -2px 0}.badge.get{color:#fff;background-color:#ddf1fc}.badge.head{color:#fff;background-color:#ddf1fc}.badge.options{color:#fff;background-color:#ddf1fc}.badge.put{color:#fff;background-color:#f7f2c3}.badge.patch{color:#fff;background-color:#f7f2c3}.badge.post{color:#fff;background-color:#e4f2c8}.badge.delete{color:#fff;background-color:#f2d8e1}.collapse-button{float:right}.collapse-button .close{display:none;color:#0099e5;cursor:pointer}.collapse-button .open{color:#0099e5;cursor:pointer}.collapse-button.show .close{display:inline}.collapse-button.show .open{display:none}.collapse-content{max-height:0;overflow:hidden;transition:max-height .3s ease-in-out}nav{width:220px}.container{max-width:940px;margin-left:auto;margin-right:auto}.container .row .content{margin-left:244px;width:696px}.container .row:after{content:'';display:block;clear:both}.container-fluid nav{width:22%}.container-fluid .row .content{margin-left:24%}.container-fluid.triple nav{width:15%;padding-right:1px}.container-fluid.triple .row .content{position:relative;margin-left:15%;padding-left:24px}.middle:before,.middle:after{content:'';display:table}.middle:after{clear:both}.middle{box-sizing:border-box;width:48%;padding-right:12px}.right{box-sizing:border-box;float:right;width:52%;padding-left:12px}.right a{color:#0099e5}.right h1,.right h2,.right h3,.right h4,.right h5,.right p,.right div{color:#dde4e8}.right pre{background-color:#272B2D;border:1px solid #272B2D}.right pre code{color:#D0D0D0}.right .description{margin-top:12px}.triple .resource-heading{font-size:125%}.definition{margin-top:12px;margin-bottom:12px}.definition .method{font-weight:bold}.definition .method.get{color:#2e8ab8}.definition .method.head{color:#2e8ab8}.definition .method.options{color:#2e8ab8}.definition .method.post{color:#8ab82e}.definition .method.put{color:#b8aa2e}.definition .method.patch{color:#b8aa2e}.definition .method.delete{color:#b82e5f}.definition .uri{word-break:break-all;word-wrap:break-word}.definition .hostname{opacity:.5}.example-names{background-color:#eee;padding:12px;border-radius:3px}.example-names .tab-button{cursor:pointer;color:#4c555a;border:1px solid #ddd;padding:6px;margin-left:12px}.example-names .tab-button.active{background-color:#d5d5d5}.right .example-names{background-color:#424648}.right .example-names .tab-button{color:#dde4e8;border:1px solid #6C6F71;border-radius:3px}.right .example-names .tab-button.active{background-color:#5a6063}#nav-background{position:fixed;left:0;top:0;bottom:0;width:15%;padding-right:14.4px;background-color:#fafcfc;border-right:1px solid #f0f4f7;z-index:-1}#right-panel-background{position:absolute;right:-12px;top:-12px;bottom:-12px;width:52%;background-color:#2d3134;z-index:-1}@media (max-width:1200px){nav{width:198px}.container{max-width:840px}.container .row .content{margin-left:224px;width:606px}}@media (max-width:992px){nav{width:169.4px}.container{max-width:720px}.container .row .content{margin-left:194px;width:526px}}@media (max-width:768px){nav{display:none}.container{width:95%;max-width:none}.container .row .content,.container-fluid .row .content,.container-fluid.triple .row .content{margin-left:auto;margin-right:auto;width:95%}#nav-background{display:none}#right-panel-background{width:52%}}.back-to-top{position:fixed;z-index:1;bottom:0;right:24px;padding:4px 8px;color:rgba(76,85,90,0.5);background-color:transparent;text-decoration:none !important;border-top:1px solid transparent;border-left:1px solid transparent;border-right:1px solid transparent;border-top-left-radius:3px;border-top-right-radius:3px}.resource-group{padding:12px 12px 12px 0;margin-bottom:12px;background-color:transparent;border:1px solid transparent;border-radius:3px}.resource-group h2.group-heading,.resource-group .heading a{padding:12px 12px 12px 0;margin:0 0 12px 0;background-color:transparent;border-bottom:1px solid transparent;border-top-left-radius:3px;border-top-right-radius:3px;white-space:nowrap;text-overflow:ellipsis;overflow:hidden}.triple .content .resource-group{padding:0;border:none}.triple .content .resource-group h2.group-heading,.triple .content .resource-group .heading a{margin:0 0 12px 0;border:1px solid transparent}nav .resource-group .heading a{padding:12px;margin-bottom:0}nav .resource-group .collapse-content{padding:0}.action{margin-bottom:12px;padding:12px 12px 0 12px;overflow:hidden;border:1px solid transparent;border-radius:3px}.action h4.action-heading{padding:12px;margin:-12px -12px 12px -12px;border-bottom:1px solid transparent;border-top-left-radius:3px;border-top-right-radius:3px;white-space:nowrap;text-overflow:ellipsis;overflow:hidden}.action h4.action-heading .name{float:right;font-weight:normal}.action h4.action-heading .method{padding:6px 12px;margin-right:12px;border-radius:2px}.action h4.action-heading .method.get{color:#fff;background-color:#0099e5}.action h4.action-heading .method.head{color:#fff;background-color:#0099e5}.action h4.action-heading .method.options{color:#fff;background-color:#0099e5}.action h4.action-heading .method.put{color:#fff;background-color:#b1a74e}.action h4.action-heading .method.patch{color:#fff;background-color:#b1a74e}.action h4.action-heading .method.post{color:#fff;background-color:#85a546}.action h4.action-heading .method.delete{color:#fff;background-color:#c14a74}.action h4.action-heading code{color:#444;background-color:#f5f5f5;border-color:#cfcfcf;font-weight:normal}.action dl.inner{padding-bottom:2px}.action .title{border-bottom:1px solid transparent;margin:0 -12px -1px -12px;padding:12px}.action.get{border-color:#ddf1fc}.action.get h4.action-heading{color:#0099e5;background:#ddf1fc;border-bottom-color:#ddf1fc}.action.head{border-color:#ddf1fc}.action.head h4.action-heading{color:#0099e5;background:#ddf1fc;border-bottom-color:#ddf1fc}.action.options{border-color:#ddf1fc}.action.options h4.action-heading{color:#0099e5;background:#ddf1fc;border-bottom-color:#ddf1fc}.action.post{border-color:#e4f2c8}.action.post h4.action-heading{color:#85a546;background:#e4f2c8;border-bottom-color:#e4f2c8}.action.put{border-color:#f7f2c3}.action.put h4.action-heading{color:#b1a74e;background:#f7f2c3;border-bottom-color:#f7f2c3}.action.patch{border-color:#f7f2c3}.action.patch h4.action-heading{color:#b1a74e;background:#f7f2c3;border-bottom-color:#f7f2c3}.action.delete{border-color:#f2d8e1}.action.delete h4.action-heading{color:#c14a74;background:#f2d8e1;border-bottom-color:#f2d8e1}</style></head><body class="preload"><a href="#top" class="text-muted back-to-top"><i class="fa fa-toggle-up"></i>&nbsp;Back to top</a><div class="container"><div class="row"><nav><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#">Resource Group</a></div><div class="collapse-content"><ul><li><a href="#kota-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Data Kota</a></li><li><a href="#kecamatan-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Data Kecamatan</a></li><li><a href="#kelurahan-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Data Kelurahan</a></li><li><a href="#rw-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Data RW</a></li><li><a href="#tps-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Data TPS</a></li><li><a href="#rumah-sakit-umum-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Data Rumah Sakit Umum</a></li><li><a href="#rumah-sakit-khusus-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Data Rumah Sakit Khusus</a></li><li><a href="#puskesmas-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Data Puskesmas</a></li></ul></div></div><p style="text-align: center; word-wrap: break-word;"><a href="http://api-jakgo.fzlrhmn.com/">http://api-jakgo.fzlrhmn.com/</a></p></nav><div class="content"><header><h1 id="top">API jakgo</h1></header><p>API Jakgo merupakan sebuah layanan yang menyediakan informasi data yang ada di lingkup Pemerintah Provinsi DKI Jakarta.
Data ini mencakup semua bidang yang ada di Provinsi DKI Jakarta seperti Kesehatan, Kebersihan, Transportasi, dll.</p>
<p>Sample Calls:</p>
<p><strong>Batas Administrasi Kecamatan</strong>
<a href="http://api-jakgo.fzlrhmn.com/api/v1/kecamatan?api_token=q06qb1eTOimT7sc9nMQfkzCKBYEzePXwYbWpEaEk">api-jakgo.fzlrhmn.com/api/v1/kecamatan?api_token=q06qb1eTOimT7sc9nMQfkzCKBYEzePXwYbWpEaEk</a></p>
<p><strong>Batas Administrasi Kelurahan</strong>
<a href="http://api-jakgo.fzlrhmn.com/api/v1/kelurahan?api_token=q06qb1eTOimT7sc9nMQfkzCKBYEzePXwYbWpEaEk">api-jakgo.fzlrhmn.com/api/v1/kelurahan?api_token=q06qb1eTOimT7sc9nMQfkzCKBYEzePXwYbWpEaEk&amp;</a></p>
<section id="" class="resource-group"><h2 class="group-heading">Resource Group <a href="#" class="permalink">&para;</a></h2><div id="kota" class="resource"><h3 class="resource-heading">Kota <a href="#kota" class="permalink">&nbsp;&para;</a></h3><div id="kota-get" class="action get"><h4 class="action-heading"><div class="name">Data Kota</div><a href="#kota-get" class="method get">GET</a><code class="uri">/api/v1/kota/{kode_kota}?api_token={api_token}&amp;format={format}</code></h4><h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname">http://api-jakgo.fzlrhmn.com/</span>/api/v1/kota/<span class="hljs-attribute" title="kode_kota">3174</span>?api_token=<span class="hljs-attribute" title="api_token">q06qb1eTOimT7sc9nMQfkzCKBYEzePXwYbWpEaEk</span>&format=<span class="hljs-attribute" title="format">geojson</span></span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>kode_kota</dt><dd><code>array</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>3174</span></span><p>kode_kota of the kota (city) itself. use comma without whitespace if want to get more than one data, i.e ‘3174,3175’.</p>
</dd><dt>format</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>geojson</span></span><p>String of the response format that the response will show.</p>
</dd><dt>api_token</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>q06qb1eTOimT7sc9nMQfkzCKBYEzePXwYbWpEaEk</span></span><p>String <code>api_token</code> of the application.</p>
</dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"success"</span></span>,
  "<span class="hljs-attribute">count</span>": <span class="hljs-value"><span class="hljs-number">5</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">[
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Barat"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3173</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Pusat"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3171</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Selatan"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Timur"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3175</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Utara"</span>
    </span>}
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="kecamatan" class="resource"><h3 class="resource-heading">Kecamatan <a href="#kecamatan" class="permalink">&nbsp;&para;</a></h3><div id="kecamatan-get" class="action get"><h4 class="action-heading"><div class="name">Data Kecamatan</div><a href="#kecamatan-get" class="method get">GET</a><code class="uri">/api/v1/kecamatan/{kode_kecamatan}?api_token={api_token}&amp;format={format}</code></h4><h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname">http://api-jakgo.fzlrhmn.com/</span>/api/v1/kecamatan/<span class="hljs-attribute" title="kode_kecamatan">3175060</span>?api_token=<span class="hljs-attribute" title="api_token">q06qb1eTOimT7sc9nMQfkzCKBYEzePXwYbWpEaEk</span>&format=<span class="hljs-attribute" title="format">geojson</span></span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>kode_kecamatan</dt><dd><code>array</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>3175060</span></span><p>kode_kecamatan of the kecamatan itself, use comma without whitespace if want to get more than one data, i.e ‘3172040,3172050’.</p>
</dd><dt>format</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>geojson</span></span><p>String of the response format that the response will show.</p>
</dd><dt>api_token</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>q06qb1eTOimT7sc9nMQfkzCKBYEzePXwYbWpEaEk</span></span><p>String <code>api_token</code> of the application.</p>
</dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"success"</span></span>,
  "<span class="hljs-attribute">count</span>": <span class="hljs-value"><span class="hljs-number">42</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">[
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Timur"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Makasar"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3171</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Selatan"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3171010</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Jagakarsa"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Timur"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172010</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Pasar Rebo"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Timur"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Ciracas"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Timur"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Cipayung"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3171</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Selatan"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3171030</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Cilandak"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3171</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Selatan"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3171020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Pasar Minggu"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3171</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Selatan"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3171060</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Kebayoran Baru"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Timur"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172050</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Kramat Jati"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3171</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Selatan"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3171050</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Kebayoran Lama"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3171</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Selatan"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3171080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Pancoran"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3173</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Pusat"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3173010</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Tanah Abang"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3171</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Selatan"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3171070</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Mampang Prapatan"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3171</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Selatan"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3171040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Pesanggrahan"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Timur"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172070</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Duren Sawit"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Timur"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172060</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Jatinegara"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3171</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Selatan"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3171090</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Tebet"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3171</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Selatan"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3171100</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Setiabudi"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Timur"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172100</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Matraman"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3173</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Pusat"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3173020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Menteng"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3173</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Pusat"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3173040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Johar Baru"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Barat"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174030</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Palmerah"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3173</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Pusat"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3173030</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Senen"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Timur"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172090</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Pulo Gadung"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3173</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Pusat"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3173050</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Cempaka Putih"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3173</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Pusat"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3173080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Gambir"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Barat"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Kebon Jeruk"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Barat"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174010</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Kembangan"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Timur"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Cakung"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3173</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Pusat"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3173060</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Kemayoran"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Barat"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Grogol Petamburan"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3175</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Utara"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3175050</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Kelapa Gading"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3173</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Pusat"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3173070</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Sawah Besar"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Barat"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174050</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Tambora"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Barat"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174060</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Taman Sari"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Barat"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Cengkareng"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3175</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Utara"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3175020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Pademangan"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3175</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Utara"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3175040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Koja"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Barat"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Kalideres"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3175</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Utara"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3175030</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Tanjung Priok"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3175</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Utara"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3175010</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Penjaringan"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3175</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Utara"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3175060</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Cilincing"</span>
    </span>}
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="kelurahan" class="resource"><h3 class="resource-heading">Kelurahan <a href="#kelurahan" class="permalink">&nbsp;&para;</a></h3><div id="kelurahan-get" class="action get"><h4 class="action-heading"><div class="name">Data Kelurahan</div><a href="#kelurahan-get" class="method get">GET</a><code class="uri">/api/v1/kelurahan/{kode_kelurahan}?api_token={api_token}&amp;format={format}</code></h4><h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname">http://api-jakgo.fzlrhmn.com/</span>/api/v1/kelurahan/<span class="hljs-attribute" title="kode_kelurahan">3174020007</span>?api_token=<span class="hljs-attribute" title="api_token">q06qb1eTOimT7sc9nMQfkzCKBYEzePXwYbWpEaEk</span>&format=<span class="hljs-attribute" title="format">geojson</span></span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>kode_kelurahan</dt><dd><code>array</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>3174020007</span></span><p>kode_kelurahan of the kota (city) itself. use comma without whitespace if want to get more than one data, i.e ‘3174020007,3174020006’.</p>
</dd><dt>format</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>geojson</span></span><p>String of the response format that the response will show.</p>
</dd><dt>api_token</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>q06qb1eTOimT7sc9nMQfkzCKBYEzePXwYbWpEaEk</span></span><p>String <code>api_token</code> of the application.</p>
</dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"success"</span></span>,
  "<span class="hljs-attribute">count</span>": <span class="hljs-value"><span class="hljs-number">377</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">[
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3171</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"Jakarta Selatan"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3171010</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"Jagakarsa"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3171010001</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"Cipedak"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3101</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"KEPULAUAN SERIBU"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3101010</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEPULAUAN SERIBU SELATAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3101010003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"PULAU UNTUNG JAWA"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_provinsi</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_provinsi</span>": <span class="hljs-value"><span class="hljs-string">"DAERAH KHUSUS IBUKOTA JAKARTA"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3101</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"KEPULAUAN SERIBU"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3101010</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEPULAUAN SERIBU SELATAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3101010003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"PULAU UNTUNG JAWA"</span>
    </span>}
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="rw" class="resource"><h3 class="resource-heading">RW <a href="#rw" class="permalink">&nbsp;&para;</a></h3><div id="rw-get" class="action get"><h4 class="action-heading"><div class="name">Data RW</div><a href="#rw-get" class="method get">GET</a><code class="uri">/api/v1/rw/{kode_rw}?api_token={api_token}&amp;format={format}&amp;page={page}</code></h4><h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname">http://api-jakgo.fzlrhmn.com/</span>/api/v1/rw/<span class="hljs-attribute" title="kode_rw">3174070005001000</span>?api_token=<span class="hljs-attribute" title="api_token">q06qb1eTOimT7sc9nMQfkzCKBYEzePXwYbWpEaEk</span>&format=<span class="hljs-attribute" title="format">geojson</span>&page=<span class="hljs-attribute" title="page">1</span></span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>kode_rw</dt><dd><code>array</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>3174070005001000</span></span><p>kode_rw of the kota (city) itself. use comma without whitespace if want to get more than one data, i.e ‘3174070005001000,3174070005002000’.</p>
</dd><dt>format</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>geojson</span></span><p>String of the response format that the response will show.</p>
</dd><dt>api_token</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>q06qb1eTOimT7sc9nMQfkzCKBYEzePXwYbWpEaEk</span></span><p>String <code>api_token</code> of the application.</p>
</dd><dt>page</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>1</span></span><p>Number of page that show. This API show 200 RW per call.</p>
</dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">[
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"CENGKARENG"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"CENGKARENG TIMUR"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174070005001000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 01"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"CENGKARENG"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"CENGKARENG TIMUR"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174070005002000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 02"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"CENGKARENG"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"CENGKARENG TIMUR"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174070005003000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 03"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"CENGKARENG"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"CENGKARENG TIMUR"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174070005004000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 04"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"CENGKARENG"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"CENGKARENG TIMUR"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174070005005000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 05"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"CENGKARENG"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"CENGKARENG TIMUR"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174070005006000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 06"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"CENGKARENG"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"CENGKARENG TIMUR"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174070005007000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 07"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"CENGKARENG"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"CENGKARENG TIMUR"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174070005008000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 08"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"CENGKARENG"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"CENGKARENG TIMUR"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174070005009000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 09"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"CENGKARENG"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"CENGKARENG TIMUR"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174070005010000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 10"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"CENGKARENG"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"CENGKARENG TIMUR"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174070005011000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 11"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"CENGKARENG"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"CENGKARENG TIMUR"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174070005012000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 12"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"CENGKARENG"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"CENGKARENG TIMUR"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174070005013000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 13"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"CENGKARENG"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"CENGKARENG TIMUR"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174070005014000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 14"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"CENGKARENG"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"CENGKARENG TIMUR"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174070005015000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 15"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"CENGKARENG"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"CENGKARENG TIMUR"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174070005016000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 16"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"CENGKARENG"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"CENGKARENG TIMUR"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174070005017000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 17"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040004</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040004001000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 01"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040004</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040004002000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 02"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040004</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040004003000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 03"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040004</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040004004000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 04"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040004</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040004005000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 05"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040004</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040004006000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 06"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040004</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040004007000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 07"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040004</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040004008000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 08"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040004</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040004009000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 09"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040004</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040004010000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 10"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"JELAMBAR"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040005001000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 01"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"JELAMBAR"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040005011000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 011"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"JELAMBAR"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040005002000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 02"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"JELAMBAR"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040005003000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 03"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"JELAMBAR"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040005004000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 04"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"JELAMBAR"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040005005000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 05"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"JELAMBAR"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040005006000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 06"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"JELAMBAR"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040005007000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 07"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"JELAMBAR"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040005008000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 08"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"JELAMBAR"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040005009000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 09"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"JELAMBAR"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040005010000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 10"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040007</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"JELAMBAR BARU"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040007001000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 01"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040007</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"JELAMBAR BARU"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040007002000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 02"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040007</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"JELAMBAR BARU"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040007003000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 03"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040007</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"JELAMBAR BARU"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040007004000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 04"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040007</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"JELAMBAR BARU"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040007005000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 05"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040007</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"JELAMBAR BARU"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040007006000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 06"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040007</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"JELAMBAR BARU"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040007007000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 07"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040007</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"JELAMBAR BARU"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040007008000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 08"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040007</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"JELAMBAR BARU"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040007009000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 09"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040007</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"JELAMBAR BARU"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040007010000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 10"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040007</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"JELAMBAR BARU"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040007011000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 11"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040007</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"JELAMBAR BARU"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040007012000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 12"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040002</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"TANJUNG DUREN SELATAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040002001000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 01"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040002</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"TANJUNG DUREN SELATAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040002002000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 02"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040002</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"TANJUNG DUREN SELATAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040002003000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 03"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040002</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"TANJUNG DUREN SELATAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040002004000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 04"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040002</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"TANJUNG DUREN SELATAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040002005000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 05"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040002</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"TANJUNG DUREN SELATAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040002006000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 06"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040002</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"TANJUNG DUREN SELATAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040002007000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 07"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040001</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"TANJUNG DUREN UTARA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040001001000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 01"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040001</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"TANJUNG DUREN UTARA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040001002000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 02"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040001</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"TANJUNG DUREN UTARA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040001003000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 03"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040001</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"TANJUNG DUREN UTARA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040001004000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 04"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040001</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"TANJUNG DUREN UTARA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040001005000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 05"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040001</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"TANJUNG DUREN UTARA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040001006000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 06"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040001</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"TANJUNG DUREN UTARA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040001007000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 07"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"TOMANG"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040003001000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 01"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"TOMANG"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040003016000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 016"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"TOMANG"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040003002000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 02"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"TOMANG"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040003003000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 03"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"TOMANG"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040003004000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 04"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"TOMANG"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040003005000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 05"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"TOMANG"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040003006000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 06"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"TOMANG"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040003007000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 07"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"TOMANG"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040003008000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 08"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"TOMANG"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040003009000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 09"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"TOMANG"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040003010000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 10"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"TOMANG"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040003011000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 11"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"TOMANG"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040003012000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 12"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"TOMANG"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040003013000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 13"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"TOMANG"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040003014000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 14"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"TOMANG"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040003015000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 15"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040006</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"WIJAYA KESUMA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040006001000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 01"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040006</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"WIJAYA KESUMA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040006002000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 02"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040006</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"WIJAYA KESUMA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040006003000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 03"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040006</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"WIJAYA KESUMA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040006004000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 04"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040006</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"WIJAYA KESUMA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040006005000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 05"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040006</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"WIJAYA KESUMA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040006006000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 06"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040006</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"WIJAYA KESUMA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040006007000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 07"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040006</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"WIJAYA KESUMA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040006008000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 08"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040006</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"WIJAYA KESUMA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040006009000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 09"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174040</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"GROGOL PETAMBURAN"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174040006</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"WIJAYA KESUMA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174040006010000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 10"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080002</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KALIDERES"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080002001000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 01"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080002</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KALIDERES"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080002002000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 02"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080002</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KALIDERES"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080002003000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 03"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080002</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KALIDERES"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080002004000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 04"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080002</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KALIDERES"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080002005000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 05"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080002</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KALIDERES"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080002006000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 06"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080002</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KALIDERES"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080002007000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 07"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080002</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KALIDERES"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080002008000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 08"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080002</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KALIDERES"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080002009000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 09"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080002</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KALIDERES"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080002010000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 10"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080002</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KALIDERES"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080002011000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 11"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080002</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KALIDERES"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080002012000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 12"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080002</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KALIDERES"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080002013000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 13"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080002</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KALIDERES"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080002014000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 14"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080002</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KALIDERES"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080002015000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 15"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080002</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KALIDERES"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080002016000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 16"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080002</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KALIDERES"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080002017000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 17"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KAMAL"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080005001000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 01"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KAMAL"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080005001000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 01"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KAMAL"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080005002000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 02"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KAMAL"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080005003000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 03"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KAMAL"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080005004000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 04"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KAMAL"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080005005000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 05"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KAMAL"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080005006000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 06"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KAMAL"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080005007000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 07"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KAMAL"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080005008000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 08"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KAMAL"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080005009000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 09"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KAMAL"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080005010000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 10"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"PEGADUNGAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080003001000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 01"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"PEGADUNGAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080003002000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 02"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"PEGADUNGAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080003003000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 03"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"PEGADUNGAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080003004000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 04"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"PEGADUNGAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080003005000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 05"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"PEGADUNGAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080003006000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 06"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"PEGADUNGAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080003007000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 07"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"PEGADUNGAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080003008000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 08"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"PEGADUNGAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080003009000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 09"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"PEGADUNGAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080003010000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 10"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"PEGADUNGAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080003011000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 11"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"PEGADUNGAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080003012000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 12"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"PEGADUNGAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080003013000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 13"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"PEGADUNGAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080003014000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 14"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"PEGADUNGAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080003015000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 15"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"PEGADUNGAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080003016000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 16"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"PEGADUNGAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080003017000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 17"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"PEGADUNGAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080003018000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 18"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"PEGADUNGAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080003019000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 19"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080001</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"SEMANAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080001001000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 01"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080001</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"SEMANAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080001002000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 02"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080001</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"SEMANAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080001003000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 03"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080001</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"SEMANAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080001004000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 04"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080001</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"SEMANAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080001005000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 05"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080001</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"SEMANAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080001006000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 06"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080001</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"SEMANAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080001007000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 07"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080001</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"SEMANAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080001008000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 08"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080001</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"SEMANAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080001009000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 09"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080001</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"SEMANAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080001010000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 10"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080001</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"SEMANAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080001011000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 11"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KALI DERES"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080001</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"SEMANAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174080001012000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 12"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"DURI KEPA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020005001000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 01"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"DURI KEPA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020005002000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 02"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"DURI KEPA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020005003000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 03"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"DURI KEPA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020005004000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 04"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"DURI KEPA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020005005000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 05"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"DURI KEPA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020005006000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 06"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"DURI KEPA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020005007000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 07"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"DURI KEPA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020005008000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 08"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"DURI KEPA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020005009000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 09"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"DURI KEPA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020005010000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 10"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"DURI KEPA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020005011000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 11"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"DURI KEPA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020005012000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 12"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"DURI KEPA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020005013000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 13"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020005</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"DURI KEPA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020005014000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 14"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020004</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020004001000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 01"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020004</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020004002000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 02"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020004</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020004003000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 03"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020004</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020004004000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 04"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020004</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020004005000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 05"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020004</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020004006000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 06"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020004</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020004007000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 07"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020004</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020004008000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 08"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020004</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020004009000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 09"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020004</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020004010000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 10"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020004</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020004011000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 11"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020004</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020004012000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 12"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020004</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020004013000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 13"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020006</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KEDOYA SELATAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020006001000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 01"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020006</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KEDOYA SELATAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020006002000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 02"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020006</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KEDOYA SELATAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020006003000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 03"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020006</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KEDOYA SELATAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020006004000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 04"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020006</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KEDOYA SELATAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020006005000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 05"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KELAPA DUA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020003001000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 01"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KELAPA DUA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020003002000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 02"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KELAPA DUA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020003003000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 03"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KELAPA DUA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020003004000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 04"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KELAPA DUA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020003005000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 05"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KELAPA DUA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020003006000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 06"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KELAPA DUA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020003007000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 07"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020003</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"KELAPA DUA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020003008000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 08"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020001</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"SUKABUMI SELATAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020001001000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 01"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020001</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"SUKABUMI SELATAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020001002000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 02"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020001</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"SUKABUMI SELATAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020001003000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 03"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020001</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"SUKABUMI SELATAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020001004000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 04"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020001</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"SUKABUMI SELATAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020001005000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 05"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020001</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"SUKABUMI SELATAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020001006000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 06"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020001</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"SUKABUMI SELATAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020001007000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 07"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020001</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"SUKABUMI SELATAN"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020001008000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 08"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020002</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"SUKABUMI UTARA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020002001000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 01"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020002</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"SUKABUMI UTARA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020002002000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 02"</span>
    </span>},
    {
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">nama_kota</span>": <span class="hljs-value"><span class="hljs-string">"JAKARTA BARAT"</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174020</span></span>,
      "<span class="hljs-attribute">nama_kecamatan</span>": <span class="hljs-value"><span class="hljs-string">"KEBON JERUK"</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174020002</span></span>,
      "<span class="hljs-attribute">nama_kelurahan</span>": <span class="hljs-value"><span class="hljs-string">"SUKABUMI UTARA"</span></span>,
      "<span class="hljs-attribute">kode_rw</span>": <span class="hljs-value"><span class="hljs-number">3174020002003000</span></span>,
      "<span class="hljs-attribute">nama_rw</span>": <span class="hljs-value"><span class="hljs-string">"RW 03"</span>
    </span>}
  ]</span>,
  "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">pagination</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">total</span>": <span class="hljs-value"><span class="hljs-number">2732</span></span>,
      "<span class="hljs-attribute">count</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
      "<span class="hljs-attribute">per_page</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
      "<span class="hljs-attribute">current_page</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
      "<span class="hljs-attribute">total_pages</span>": <span class="hljs-value"><span class="hljs-number">14</span></span>,
      "<span class="hljs-attribute">links</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">next</span>": <span class="hljs-value"><span class="hljs-string">"http://api-jakgo.fzlrhmn.com/api/v1/rw?page=2"</span>
      </span>}
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="tps" class="resource"><h3 class="resource-heading">TPS <a href="#tps" class="permalink">&nbsp;&para;</a></h3><div id="tps-get" class="action get"><h4 class="action-heading"><div class="name">Data TPS</div><a href="#tps-get" class="method get">GET</a><code class="uri">/api/v1/tps/{id}?api_token={api_token}&amp;format={format}&amp;page={page}</code></h4><h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname">http://api-jakgo.fzlrhmn.com/</span>/api/v1/tps/<span class="hljs-attribute" title="id">1</span>?api_token=<span class="hljs-attribute" title="api_token">q06qb1eTOimT7sc9nMQfkzCKBYEzePXwYbWpEaEk</span>&format=<span class="hljs-attribute" title="format">geojson</span>&page=<span class="hljs-attribute" title="page">1</span></span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>array</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>1</span></span><p>id of the TPS itself. use comma without whitespace if want to get more than one data, i.e ‘1,2’.</p>
</dd><dt>format</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>geojson</span></span><p>String of the response format that the response will show.</p>
</dd><dt>api_token</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>q06qb1eTOimT7sc9nMQfkzCKBYEzePXwYbWpEaEk</span></span><p>String <code>api_token</code> of the application.</p>
</dd><dt>page</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>1</span></span><p>Number of page that show. This API show 200 RW per call.</p>
</dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">[
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Albo RW 08"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.168268025</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.934259972</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">2</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Bak Pos 1"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080003</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.2173480069999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.95303401</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">3</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Bak Pos 2"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080003</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.2184249979999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.953151021</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">4</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Bak Smp 172"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080003</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.218077987</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.951124026</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">5</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Dipo Aneka Elok"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080002</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.193695031</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.941415016</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">6</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Dipo Permai"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080003</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1938599869999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.94523599</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">7</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Dipo PIK 1"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080002</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.2062190189999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.928045964</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">8</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Dipo PIK 2"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080002</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.202783026</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.92807002</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">9</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Dipo PPD 1"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.173798991</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.933052978</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">10</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Dipo Rajiman"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080001</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.211005002</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.922937026</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">11</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Era Mas Jln. sumarno"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080003</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.2063800359999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.946392022</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">12</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Gapura"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080001</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.204605</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.90798698</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">13</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Gg Lele"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080001</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.212127004</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.905148029</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">14</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jembatan Tinggi Kolong"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.163001005</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.933075022</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">15</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Buaran 4"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080002</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.2121320329999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.93463699</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">16</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Cakung Cilincing"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1821030269999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.942701973</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">17</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Harapan"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080005</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.164102973</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.948844986</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">18</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Inpeksi Pan 1"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1757430059999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.938237017</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">19</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Inpeksi Pan 10"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.178644989</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.941155009</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">20</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Inpeksi Pan 11"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.178918993</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.941425996</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">21</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Inpeksi Pan 12"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1791199909999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.941623976</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">22</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Inpeksi Pan 13"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.179296011</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.941773007</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">23</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Inpeksi Pan 14"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.179512013</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.942011975</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">24</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Inpeksi Pan 15"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.179717034</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.94218196</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">25</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Inpeksi Pan 2"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1759290009999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.938540023</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">26</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Inpeksi Pan 3"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.176140979</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.938793994</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">27</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Inpeksi Pan 4"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1764549649999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.939051989</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">28</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Inpeksi Pan 5"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.176772974</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.939378968</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">29</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Inpeksi Pan 6"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1770059909999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.93961299</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">30</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Inpeksi Pan 7"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.177385021</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.939956984</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">31</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Inpeksi Pan 8"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1775969989999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.940188995</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">32</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Inpeksi Pan 9"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1778730149999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.940415977</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">33</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Irigasi 1"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080005</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.183561981</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.951399036</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">34</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Komarudin 1"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1899800039999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.942909006</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">35</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Komarudin 2"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.187977986</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.942554032</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">36</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Komarudin 3"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.187269967</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.942728041</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">37</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Komarudin 4"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.186377965</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.942723012</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">38</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Komarudin 5"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.185733983</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.942689987</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">39</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Komarudin Timur"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080005</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1887590119999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.943619959</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">40</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Rajiman 1"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080001</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.2025060039999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.922768969</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">41</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Rajiman 10"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080007</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1935289859999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.922808029</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">42</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Rajiman 11"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080001</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1929679849999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.922693029</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">43</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Rajiman 12"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080001</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.197419027</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.922248034</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">44</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Rajiman 2"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080007</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.190677965</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.923200972</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">45</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Rajiman 3"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080007</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.185862981</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.923454022</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">46</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Rajiman 4"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080007</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.187254041</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.923207007</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">47</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Rajiman 5"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080007</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.188789019</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.923258975</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">48</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Rajiman 6"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080007</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1894650199999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.923267022</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">49</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Rajiman 7"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080007</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.190656004</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.923194015</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">50</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Rajiman 8"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080007</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.191306021</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.92301699</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">51</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Rajiman 9"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080007</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1918139639999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.922900984</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">52</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Rawa Kepiting"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080001</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.195110986</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.921081021</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">53</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Rawa Terate 1"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080001</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1928969899999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.917144042</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">54</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Rawa Terate 2"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080007</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.185243977</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.912628962</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">55</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Rawa Terate 3"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080007</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1876260299999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.906064004</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">56</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Raya Bekasi"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.183685027</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.927221017</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">57</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Raya Penggilingan"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080002</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.189084984</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.934510004</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">58</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Tambun Renggas"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080005</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1631510409999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.961855963</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">59</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Kandang Monyet Ujung Menteng"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080004</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1896840389999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.958975019</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">60</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Kantor Kecamatan Cakung"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.184075037</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.939949021</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">61</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Kantor Walikota Kec. Cakung"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080002</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.214619027</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.943568997</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">62</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Liar Jln. Bekasi timur"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080001</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.2048479909999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.903397972</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">63</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Liar Jln. Cacing"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.180494037</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.942808004</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">64</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Liar Jln. Kandang Kuda 2"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080003</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.2031100039999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.94591702</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">65</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Liar Jln. Kober"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080002</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.206050962</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.932960022</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">66</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Liar Jln. Komarudin 1"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.186833018</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.942728041</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">67</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Liar Jln. Pulo Gebang"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080003</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.207757015</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.956331031</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">68</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Liar Jln. Rawa Kuning"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080003</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.209087977</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.960903024</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">69</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Liar Jln. Statsiun Cakung 1"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080003</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.2164549999999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.952871988</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">70</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Liar Jln. Statsiun Cakung 2"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.2188239769999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.951316977</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">71</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Liar Jln. Statsiun Cakung 3"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080003</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.2177510089999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.952463035</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">72</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Liar Jln. Statsiun Cakung 4"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080003</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.2150610049999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.951715034</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">73</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Liar Jln. Tambun Renggas 1"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080004</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1748189849999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.96311702</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">74</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Liar Jln. Tambun Renggas 2"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080005</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1710170379999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.962651992</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">75</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Liar Jln. Tipar Cakung 1"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.174205011</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.934952987</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">76</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Liar Jln. Tipar Cakung 2"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1633269769999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.933715986</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">77</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Liar Pinggir Tol Jln. Cakung Cilincing"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080005</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1825610139999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.943320977</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">78</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Liar Sepanjang Jln. Rawa Kunyit"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080003</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.207387038</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.961731995</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">79</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Liar Taman Pulo Indah"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080002</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.2017849929999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.937965024</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">80</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Liar Ujung Krawang"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080002</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.193899969</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.942559984</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">81</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Rusun Griya Tipar"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1714430059999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.936138021</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">82</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Rusun Komarudin"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080003</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.2087900009999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.942323027</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">83</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Rusun Pulo Gebang"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080003</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.2008120209999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.949028969</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">84</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Rusunawa Cakung Barat"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.167117022</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.93303898</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">85</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS RW 06 Palad"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.183136012</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.929052966</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">86</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Ujung Menteng Jln. Raya Bekasi"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080004</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.188334972</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.962671019</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">87</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Ujung Menteng Rukem"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080004</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1798020269999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.961410968</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">88</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Yuti"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1843089759999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.932344958</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">89</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Irigasi 2"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080005</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.184636038</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.955741029</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">90</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jln. Irigasi 3"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080005</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1838459599999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.947972011</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">91</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Kp Pulo Jahe"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080001</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.194914011</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.928337989</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">92</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Liar Jln. Cakung Cilincing"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1833130379999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.942644976</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">93</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Liar Jln. Kandang Kuda 1"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080003</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.2080740179999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.948623033</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">94</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Liar Jln. Komarudin 2"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080002</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.2105999889999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.941055013</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">95</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Rusun Vinus Blok A"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080002</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.200589985</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.936946036</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">96</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Rusun Vinus Blok B"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080002</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.198748983</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.939631011</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">97</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Ujung Menteng Rw 05"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172080004</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.189039974</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.967593962</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">98</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Door to door RW 3"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3173</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3173050</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3173050003</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1753332979999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.861972259</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">99</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Door to door RW 6"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3173</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3173050</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3173050002</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1775833369999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.868249969</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">100</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Door to door  RW 8"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3173</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3173050</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3173050002</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1737222139999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.865805555</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">101</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"LPS Jl. Cempaka Putih Tengah 33"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3173</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3173050</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3173050002</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.179416627</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.871444481</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">102</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Dipo Rawasari"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3173</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3173050</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3173050002</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.185167199</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.873590919</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">103</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jl. Cempaka Putih Barat 2"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3173</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3173050</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3173050003</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1742777659999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.860722182</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">104</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jl. Cempaka Putih Tengah 17"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3173</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3173050</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3173050002</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.174027817</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.872361125</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">105</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jl. Mardani Raya"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3173</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3173050</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3173050003</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.185805564</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.862638872</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">106</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jl. Percetakan Negara 5"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3173</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3173050</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3173050001</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1926389119999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.85872226</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">107</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jl. Percetakan Negara 9"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3173</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3173050</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3173050001</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.189388912</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.861833371</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">108</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jl. Pramuka RW 2"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3173</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3173050</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3173050001</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1958610829999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.858250023</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">109</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Komplek TNI AL"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3173</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3173050</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3173050001</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1904721889999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.871361081</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">110</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Pasar Cempaka Putih"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3173</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3173050</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3173050003</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.17266668</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.863777805</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">111</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Pasar Genjing"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3173</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3173050</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3173050001</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1944722009999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.860333346</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">112</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Pasar Jati Rawasari"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3173</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3173050</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3173050003</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1836389269999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.863749977</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">113</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Pasar Rawasari"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3173</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3173050</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3173050002</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1855277879999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.872000033</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">114</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS RW 3"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3173</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3173050</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3173050002</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.181833297</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.874666652</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">115</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Terpadu Rawasari"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3173</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3173050</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3173050002</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.184900571</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.873610196</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">116</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Door to door Jl. Beringin RW 02"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1523015889999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.7191137</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">117</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Door to door Jl. Raya Kosambi"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070001</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1772675899999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.720243329</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">118</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Dipo Jl. Cendrawasih 10"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.143195406</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.720051132</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">119</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Dipo Jl. Randu"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070001</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1765168229999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.725223521</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">120</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Dipo Kosambi Baru  RW 15"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080001</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1738121509999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.710573463</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">121</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Dipo Kosambi RW 10"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070001</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.167877512</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.715221982</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">122</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Dipo Kosambi Timur RW 09"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070001</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.172562409</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.71769171</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">123</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Dipo RW 14 Cengkareng Timur"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070005</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.139012919</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.737531591</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">124</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Indoor Rusun BCI"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070004</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.134505803</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.741215521</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">125</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jl. Komplek Pakuan RW 15"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070004</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.149597252</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.740317903</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">126</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jl. Bangun Nusa 3"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070005</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.154082827</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.729512541</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">127</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jl. Bangun Nusa RW 03"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070004</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.15221316</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.737682968</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">128</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jl. Cengkareng Brain RW 04"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070003</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.15438642</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.74855019</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">129</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jl. Cengkareng Brain RW 09"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070004</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.151927756</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.74854273</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">130</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jl. Cengkareng Brain RW 13"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070004</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.152367387</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.74820209</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">131</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jl. Daan Mogot RW 02"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070005</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.154775507</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.740403985</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">132</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS  Jl. Darmawanita"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070002</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1565528899999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.728543425</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">133</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jl. Dongkelan RW 16"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070004</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.139337467</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.745521725</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">134</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jl. Flamboyan"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1319186449999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.724840384</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">135</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jl. Hj. Nimin"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070002</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.163510457</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.727740439</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">136</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jl. Kamal Raya"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1288890889999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.736420067</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">137</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jl. Komplek Depak"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070003</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.154602003</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.762065338</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">138</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jl. Kosambi Baru RW 06"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070001</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.169545511</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.72168401</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">139</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jl. Mawar RW 01"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070004</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.142298877</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.769014355</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">140</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jl. Pesing Poglar RW 01"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070003</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.154198413</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.769483741</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">141</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jl. Pesing Poglar RW 02"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070003</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1543051159999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.768192509</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">142</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jl. Peternakan RW 07"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070004</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.14867759</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.76738441</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">143</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jl. Ringgut"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070001</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.167456908</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.727113304</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">144</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jl. Ringgut RW 11"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1225190109999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.73121918</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">145</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jl. Siantan"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1466406189999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.722758738</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">146</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jl. Taman Palem"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1356828729999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.724177291</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">147</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Jl. Tanggul RW 12"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070004</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1392710819999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.750798635</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">148</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Kapuk Bongkaran"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070004</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.139384992</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.75060208</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">149</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Komplek KFT"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.136321994</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.725282445</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">150</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Liar Jl. Bojong"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070002</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.160448883</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.740755187</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">151</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Liar Jl. Krystal RW 07"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070003</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.144697945</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.753114471</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">152</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Liar Jl. Mogot"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174080002</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.154733682</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.715622722</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">153</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Liar Jl. Rusun Bambu Kerangan"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1418884149999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.719613429</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">154</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Liar RW 05 Cengkareng Barat"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.14035788</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.720439969</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">155</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Pasar Bojong"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070002</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1615569709999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.741552809</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">156</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Pasar Jaya Ganefo"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.149654165</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.721555851</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">157</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Pasar PD Jaya Cengkareng"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070005</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.152506108</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.729126219</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">158</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Pasar UMKN Rawa Buaya"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070002</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.156293638</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.728328596</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">159</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS RSUD Cengkareng"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070005</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.143575776</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.73420758</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">160</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Rusun BCI"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070005</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.1345626319999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.739258095</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">161</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Rusun Flamboyan RW 10"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.130910469</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.723814355</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">162</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"TPS Rusun Guda Suci"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3174</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3174070</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3174070005</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.132191894</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.738748392</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">163</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps Bambu Kuning"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.3129629749999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.896210993</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">164</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps Bambu Ulung"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.32074004</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.90285801</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">165</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps BPPOM Cilangkap"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030002</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.33399996</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.903041992</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">166</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps Ceger"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172020</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172020005</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.3178119899999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.887160968</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">167</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps Cengkeh"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030008</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.293196017</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.906592986</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">168</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps Ci Eni"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030004</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.320845988</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.89289704</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">169</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps Dipo Mawar"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030007</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.3102749829999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.891037012</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">170</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps Gebang Sari"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.3135180249999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.90308298</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">171</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps Gempol"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030007</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.310425019</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.894353982</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">172</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps Gorda Kebon Jati"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030008</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.2925050129999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.897560982</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">173</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps Indraloka"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030007</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.3191230039999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.891871011</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">174</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps Kodam"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030007</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.3131799829999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.891430961</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">175</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps Komplek Bina Marga"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030004</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.3270559719999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.89075999</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">176</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps Komplek Kartika Jaya"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030007</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.314954013</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.894161031</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">177</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps Komplek Kodam"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030007</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.314235013</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.892248029</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">178</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps Komplek Munjul"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030003</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.3494019579999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.891731033</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">179</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps Komplek PM"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030007</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.313223988</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.892587999</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">180</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps Kopti"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030005</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.3101230189999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.920960993</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">181</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps Liar Ayam"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030004</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.32702102</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.896674009</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">182</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps Liar Cedang"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030008</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.3014540359999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.912118001</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">183</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps Liar Manunggal"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030008</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.294910032</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.891329037</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">184</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps Liar RT11 RW 3"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030002</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.346920999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.905730991</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">185</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps Madu Indah"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.311805015</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.903804997</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">186</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps Malaka RT6"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030004</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.341296993</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.893702038</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">187</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps Paharseno"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030007</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.311435038</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.893654009</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">188</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps Panti Sosial Bina Insan Bangun Daya 2"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030004</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.3197420069999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.891375976</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">189</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps Panti Sosial Tresna Werdha Budi Mulya 1"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030007</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.3196639719999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.890137969</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">190</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps Pasar Munjul"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030003</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.350932997</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.89202901</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">191</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps PBSI"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030004</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.337008979</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.892424971</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">192</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps Perumahan Primer"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030005</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.3076259659999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.910017999</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">193</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps Puskesmas Ceger"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030007</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.316214986</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.892315</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">194</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps RT 1 RW 8"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030008</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.287226006</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.901324037</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">195</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps RT 3 RW 12"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030008</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.288049025</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.910008024</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">196</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps RT 4 RW 6"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030004</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.3242509679999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.894940967</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">197</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps RT 5 RW 5"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030005</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.311495975</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.913319966</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">198</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps RT 6 Printis"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172020</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172020003</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.3192380029999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.887294995</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">199</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps RT 7 RW 10"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030008</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.2939440179999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.909091966</span>
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
      "<span class="hljs-attribute">nama_tps</span>": <span class="hljs-value"><span class="hljs-string">"Tps Samsir"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3172</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3172030</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3172030006</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.3130779749999</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.904502036</span>
      </span>}
    </span>}
  ]</span>,
  "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">pagination</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">total</span>": <span class="hljs-value"><span class="hljs-number">1899</span></span>,
      "<span class="hljs-attribute">count</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
      "<span class="hljs-attribute">per_page</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
      "<span class="hljs-attribute">current_page</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
      "<span class="hljs-attribute">total_pages</span>": <span class="hljs-value"><span class="hljs-number">10</span></span>,
      "<span class="hljs-attribute">links</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">next</span>": <span class="hljs-value"><span class="hljs-string">"http://api-jakgo.fzlrhmn.com/api/v1/tps?page=2"</span>
      </span>}
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="rumah-sakit-umum" class="resource"><h3 class="resource-heading">Rumah Sakit Umum <a href="#rumah-sakit-umum" class="permalink">&nbsp;&para;</a></h3><div id="rumah-sakit-umum-get" class="action get"><h4 class="action-heading"><div class="name">Data Rumah Sakit Umum</div><a href="#rumah-sakit-umum-get" class="method get">GET</a><code class="uri">/api/v1/rumahsakitumum/{id}?api_token={api_token}&amp;format={format}</code></h4><h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname">http://api-jakgo.fzlrhmn.com/</span>/api/v1/rumahsakitumum/<span class="hljs-attribute" title="id">1</span>?api_token=<span class="hljs-attribute" title="api_token">q06qb1eTOimT7sc9nMQfkzCKBYEzePXwYbWpEaEk</span>&format=<span class="hljs-attribute" title="format">geojson</span></span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>array</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>1</span></span><p>id of the Rumah Sakit Umum (Hospital) itself. use comma without whitespace if want to get more than one data, i.e ‘1,2’.</p>
</dd><dt>format</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>geojson</span></span><p>String of the response format that the response will show.</p>
</dd><dt>api_token</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>q06qb1eTOimT7sc9nMQfkzCKBYEzePXwYbWpEaEk</span></span><p>String <code>api_token</code> of the application.</p>
</dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"success"</span></span>,
  "<span class="hljs-attribute">count</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">[
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">2</span></span>,
      "<span class="hljs-attribute">nama_rsu</span>": <span class="hljs-value"><span class="hljs-string">"Tarakan"</span></span>,
      "<span class="hljs-attribute">jenis_rsu</span>": <span class="hljs-value"><span class="hljs-string">"Rumah Sakit Umum Daerah"</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-string">"Jl. Kyai Caringin No. 7"</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.171333</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.810013</span>
      </span>}</span>,
      "<span class="hljs-attribute">kode_pos</span>": <span class="hljs-value"><span class="hljs-number">10150</span></span>,
      "<span class="hljs-attribute">telepon</span>": <span class="hljs-value">[
        <span class="hljs-string">"3503150"</span>,
        <span class="hljs-string">"3503003"</span>,
        <span class="hljs-string">"3508993"</span>
      ]</span>,
      "<span class="hljs-attribute">faximile</span>": <span class="hljs-value">[
        <span class="hljs-string">"3503412"</span>,
        <span class="hljs-string">" 3863309"</span>
      ]</span>,
      "<span class="hljs-attribute">website</span>": <span class="hljs-value"><span class="hljs-string">"www.rstarakanjakarta.com"</span></span>,
      "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"kusmedi@gmail.com, rsd_tarakan@yahoo.com"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3173</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3173080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3173080001</span></span>,
      "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.171333</span></span>,
      "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.810013</span>
    </span>}
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="rumah-sakit-khusus" class="resource"><h3 class="resource-heading">Rumah Sakit Khusus <a href="#rumah-sakit-khusus" class="permalink">&nbsp;&para;</a></h3><div id="rumah-sakit-khusus-get" class="action get"><h4 class="action-heading"><div class="name">Data Rumah Sakit Khusus</div><a href="#rumah-sakit-khusus-get" class="method get">GET</a><code class="uri">/api/v1/rumahsakitkhusus/{id}?api_token={api_token}&amp;format={format}</code></h4><h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname">http://api-jakgo.fzlrhmn.com/</span>/api/v1/rumahsakitkhusus/<span class="hljs-attribute" title="id">1</span>?api_token=<span class="hljs-attribute" title="api_token">q06qb1eTOimT7sc9nMQfkzCKBYEzePXwYbWpEaEk</span>&format=<span class="hljs-attribute" title="format">geojson</span></span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>array</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>1</span></span><p>id of the Rumah Sakit Khusus (Hospital) itself. use comma without whitespace if want to get more than one data, i.e ‘1,2’.</p>
</dd><dt>format</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>geojson</span></span><p>String of the response format that the response will show.</p>
</dd><dt>api_token</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>q06qb1eTOimT7sc9nMQfkzCKBYEzePXwYbWpEaEk</span></span><p>String <code>api_token</code> of the application.</p>
</dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"success"</span></span>,
  "<span class="hljs-attribute">count</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">[
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
      "<span class="hljs-attribute">nama_rsk</span>": <span class="hljs-value"><span class="hljs-string">"Budi Kemuliaan "</span></span>,
      "<span class="hljs-attribute">jenis_rsk</span>": <span class="hljs-value"><span class="hljs-string">"Rumah Sakit Khusus Ibu dan Anak"</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-string">"Jl. Budi Kemuliaan No. 25 "</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.180302</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.81826</span>
      </span>}</span>,
      "<span class="hljs-attribute">kode_pos</span>": <span class="hljs-value"><span class="hljs-number">10110</span></span>,
      "<span class="hljs-attribute">telepon</span>": <span class="hljs-value">[
        <span class="hljs-string">"3842828"</span>
      ]</span>,
      "<span class="hljs-attribute">faximile</span>": <span class="hljs-value">[
        <span class="hljs-string">"3501012"</span>
      ]</span>,
      "<span class="hljs-attribute">website</span>": <span class="hljs-value"><span class="hljs-string">"www.rsbbudikemiaan.com"</span></span>,
      "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"rsbbudi@indo.net.id"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3173</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3173080</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3173080003</span></span>,
      "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.180302</span></span>,
      "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.81826</span>
    </span>}
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="puskesmas" class="resource"><h3 class="resource-heading">Puskesmas <a href="#puskesmas" class="permalink">&nbsp;&para;</a></h3><div id="puskesmas-get" class="action get"><h4 class="action-heading"><div class="name">Data Puskesmas</div><a href="#puskesmas-get" class="method get">GET</a><code class="uri">/api/v1/puskesmas/{id}?api_token={api_token}&amp;format={format}</code></h4><h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname">http://api-jakgo.fzlrhmn.com/</span>/api/v1/puskesmas/<span class="hljs-attribute" title="id">1</span>?api_token=<span class="hljs-attribute" title="api_token">q06qb1eTOimT7sc9nMQfkzCKBYEzePXwYbWpEaEk</span>&format=<span class="hljs-attribute" title="format">geojson</span></span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>array</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>1</span></span><p>id of the Puskesmas (Hospital) itself. use comma without whitespace if want to get more than one data, i.e ‘1,2’.</p>
</dd><dt>format</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>geojson</span></span><p>String of the response format that the response will show.</p>
</dd><dt>api_token</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>q06qb1eTOimT7sc9nMQfkzCKBYEzePXwYbWpEaEk</span></span><p>String <code>api_token</code> of the application.</p>
</dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"success"</span></span>,
  "<span class="hljs-attribute">count</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">[
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
      "<span class="hljs-attribute">nama_Puskesmas</span>": <span class="hljs-value"><span class="hljs-string">"PUSKESMAS KECAMATAN JAGAKARSA"</span></span>,
      "<span class="hljs-attribute">location</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">alamat</span>": <span class="hljs-value"><span class="hljs-string">"Jl. M. Khafi"</span></span>,
        "<span class="hljs-attribute">latitude</span>": <span class="hljs-value">-<span class="hljs-number">6.351944</span></span>,
        "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-number">106.814163</span>
      </span>}</span>,
      "<span class="hljs-attribute">telepon</span>": <span class="hljs-value">[
        <span class="hljs-string">"7864707"</span>
      ]</span>,
      "<span class="hljs-attribute">faximile</span>": <span class="hljs-value">[
        <span class="hljs-string">"7864707"</span>
      ]</span>,
      "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"puskesmas_kecamatanjagakarsa@yahoo.co.id"</span></span>,
      "<span class="hljs-attribute">kepala_puskesmas</span>": <span class="hljs-value"><span class="hljs-string">"drg. Dewi Isnawati Q.I"</span></span>,
      "<span class="hljs-attribute">kode_kota</span>": <span class="hljs-value"><span class="hljs-number">3171</span></span>,
      "<span class="hljs-attribute">kode_kecamatan</span>": <span class="hljs-value"><span class="hljs-number">3171010</span></span>,
      "<span class="hljs-attribute">kode_kelurahan</span>": <span class="hljs-value"><span class="hljs-number">3171010002</span>
    </span>}
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></section></div></div></div><p style="text-align: center;" class="text-muted">Generated by&nbsp;<a href="https://github.com/danielgtaylor/aglio" class="aglio">aglio</a>&nbsp;on 02 Apr 2016</p><script>/* eslint-env browser */
/* eslint quotes: [2, "single"] */
'use strict';

/*
  Determine if a string ends with another string.
*/
function endsWith(str, suffix) {
    return str.indexOf(suffix, str.length - suffix.length) !== -1;
}

/*
  Get a list of direct child elements by class name.
*/
function childrenByClass(element, name) {
  var filtered = [];

  for (var i = 0; i < element.children.length; i++) {
    var child = element.children[i];
    var classNames = child.className.split(' ');
    if (classNames.indexOf(name) !== -1) {
      filtered.push(child);
    }
  }

  return filtered;
}

/*
  Get an array [width, height] of the window.
*/
function getWindowDimensions() {
  var w = window,
      d = document,
      e = d.documentElement,
      g = d.body,
      x = w.innerWidth || e.clientWidth || g.clientWidth,
      y = w.innerHeight || e.clientHeight || g.clientHeight;

  return [x, y];
}

/*
  Collapse or show a request/response example.
*/
function toggleCollapseButton(event) {
    var button = event.target.parentNode;
    var content = button.parentNode.nextSibling;
    var inner = content.children[0];

    if (button.className.indexOf('collapse-button') === -1) {
      // Clicked without hitting the right element?
      return;
    }

    if (content.style.maxHeight && content.style.maxHeight !== '0px') {
        // Currently showing, so let's hide it
        button.className = 'collapse-button';
        content.style.maxHeight = '0px';
    } else {
        // Currently hidden, so let's show it
        button.className = 'collapse-button show';
        content.style.maxHeight = inner.offsetHeight + 12 + 'px';
    }
}

function toggleTabButton(event) {
    var i, index;
    var button = event.target;

    // Get index of the current button.
    var buttons = childrenByClass(button.parentNode, 'tab-button');
    for (i = 0; i < buttons.length; i++) {
        if (buttons[i] === button) {
            index = i;
            button.className = 'tab-button active';
        } else {
            buttons[i].className = 'tab-button';
        }
    }

    // Hide other tabs and show this one.
    var tabs = childrenByClass(button.parentNode.parentNode, 'tab');
    for (i = 0; i < tabs.length; i++) {
        if (i === index) {
            tabs[i].style.display = 'block';
        } else {
            tabs[i].style.display = 'none';
        }
    }
}

/*
  Collapse or show a navigation menu. It will not be hidden unless it
  is currently selected or `force` has been passed.
*/
function toggleCollapseNav(event, force) {
    var heading = event.target.parentNode;
    var content = heading.nextSibling;
    var inner = content.children[0];

    if (heading.className.indexOf('heading') === -1) {
      // Clicked without hitting the right element?
      return;
    }

    if (content.style.maxHeight && content.style.maxHeight !== '0px') {
      // Currently showing, so let's hide it, but only if this nav item
      // is already selected. This prevents newly selected items from
      // collapsing in an annoying fashion.
      if (force || window.location.hash && endsWith(event.target.href, window.location.hash)) {
        content.style.maxHeight = '0px';
      }
    } else {
      // Currently hidden, so let's show it
      content.style.maxHeight = inner.offsetHeight + 12 + 'px';
    }
}

/*
  Refresh the page after a live update from the server. This only
  works in live preview mode (using the `--server` parameter).
*/
function refresh(body) {
    document.querySelector('body').className = 'preload';
    document.body.innerHTML = body;

    // Re-initialize the page
    init();
    autoCollapse();

    document.querySelector('body').className = '';
}

/*
  Determine which navigation items should be auto-collapsed to show as many
  as possible on the screen, based on the current window height. This also
  collapses them.
*/
function autoCollapse() {
  var windowHeight = getWindowDimensions()[1];
  var itemsHeight = 64; /* Account for some padding */
  var itemsArray = Array.prototype.slice.call(
    document.querySelectorAll('nav .resource-group .heading'));

  // Get the total height of the navigation items
  itemsArray.forEach(function (item) {
    itemsHeight += item.parentNode.offsetHeight;
  });

  // Should we auto-collapse any nav items? Try to find the smallest item
  // that can be collapsed to show all items on the screen. If not possible,
  // then collapse the largest item and do it again. First, sort the items
  // by height from smallest to largest.
  var sortedItems = itemsArray.sort(function (a, b) {
    return a.parentNode.offsetHeight - b.parentNode.offsetHeight;
  });

  while (sortedItems.length && itemsHeight > windowHeight) {
    for (var i = 0; i < sortedItems.length; i++) {
      // Will collapsing this item help?
      var itemHeight = sortedItems[i].nextSibling.offsetHeight;
      if ((itemsHeight - itemHeight <= windowHeight) || i === sortedItems.length - 1) {
        // It will, so let's collapse it, remove its content height from
        // our total and then remove it from our list of candidates
        // that can be collapsed.
        itemsHeight -= itemHeight;
        toggleCollapseNav({target: sortedItems[i].children[0]}, true);
        sortedItems.splice(i, 1);
        break;
      }
    }
  }
}

/*
  Initialize the interactive functionality of the page.
*/
function init() {
    var i, j;

    // Make collapse buttons clickable
    var buttons = document.querySelectorAll('.collapse-button');
    for (i = 0; i < buttons.length; i++) {
        buttons[i].onclick = toggleCollapseButton;

        // Show by default? Then toggle now.
        if (buttons[i].className.indexOf('show') !== -1) {
            toggleCollapseButton({target: buttons[i].children[0]});
        }
    }

    var responseCodes = document.querySelectorAll('.example-names');
    for (i = 0; i < responseCodes.length; i++) {
        var tabButtons = childrenByClass(responseCodes[i], 'tab-button');
        for (j = 0; j < tabButtons.length; j++) {
            tabButtons[j].onclick = toggleTabButton;

            // Show by default?
            if (j === 0) {
                toggleTabButton({target: tabButtons[j]});
            }
        }
    }

    // Make nav items clickable to collapse/expand their content.
    var navItems = document.querySelectorAll('nav .resource-group .heading');
    for (i = 0; i < navItems.length; i++) {
        navItems[i].onclick = toggleCollapseNav;

        // Show all by default
        toggleCollapseNav({target: navItems[i].children[0]});
    }
}

// Initial call to set up buttons
init();

window.onload = function () {
    autoCollapse();
    // Remove the `preload` class to enable animations
    document.querySelector('body').className = '';
};
</script></body></html>