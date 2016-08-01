<?php
/** Adminer - Compact database management
* @link https://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.2.5
*/error_reporting(6135);$Ac=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($Ac||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$hh=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($hh)$$X=$hh;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0„\0\n @\0´C„è\"\0`EãQ¸àÿ‡?ÀtvM'”JdÁd\\Œb0\0Ä\"™ÀfÓˆ¤îs5›ÏçÑAXPaJ“0„¥‘8„#RŠT©‘z`ˆ#.©ÇcíXÃşÈ€?À-\0¡Im? .«M¶€\0È¯(Ì‰ıÀ/(%Œ\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("b7™'³¼Øo9„c`ìÄa1šÌç#yÔÜd…£C³1¼ÜtFQxÄ\\2ˆ\nÆS‘Ân0‹'#I„Ø,\$M‡c)ĞÒc˜œåç1iÎXi3Í¦‘œÒngÓ\r‡S(ìèe<¦C,äaŸG‡Fèõv¨:;Nfšù’­„ÌÇš™„tl§šÇFƒ|ğä,¿\\nw\\Yw¬Œ¦Jõ‚Åd³Z\r6¨µå€7[Œ\"êı‡†=éröXFjÕlĞßEÆ£©ÌĞ-4N||ğ:§îf‡J™ b{Çè¦“Ñ”t1ÈéTÊuB¤p0™”ó8è\\82›D:À‡Cy·p<pcI@#şc‘ëÜÊ4ŒãB@¶JXØ·ÊÀFÁˆr ‰\"Œê2Â(dä?[šçº!+¦¦©êˆ@`øhb>Û°í;óÀñ<ƒkÌ–¥HŞõ½¯{âù°²†Á(L†©9/ëÿ\0ÀhD\r\"(š*‹¡NÒ’>œ0å?ĞµÉÉ³öå.pØbºJ\\@¨F±F©£°(÷5:ªŠ¦:>Ã Â­£ØîúƒC†CÓ¤B©³Ôù9º‘ÛE\"¤€GM&óÇ/cvÅêû¿!Ìnô\rƒ(ÌS‘ûé!T3Å2¹É=DŒe=ÒŒôí\\Ç)¤™>U]@ıWƒ”u=ÕMƒ Øu^íÎêNğ„pfòÑ#EqÊPG\n+­PZ›@\n…KSÎíË²V÷È3ªÊ¥‘s³hZA•¨¶Å2İsÅmuO6Ò(Â2 G+NJt2(Ã öíc€Ø0.\0ÜĞ+¬2| \r—xTÕíZ.õúñ;ï-¨e¹fW7Rô­OUĞú8Q“\\ejR\$©#hÎ=ãÉúm‘\\¡ĞÚúŒ•-F–NÕ A¢èêXğÏã%DÑ8ğéëmÌ¼l1hú‚¬–Ş)£ü+D Ø„°Œ5ÙZ›¨ó»·ƒ•Ùƒ[˜Nãp*cƒ%Î³n‡²U³,¦`İQB\$©:R6£Ã~*ˆ-Êxà:‚Øè<({¢Œ#8Ê.é	f?¥İê†íjCïEÒË Ì0£f\$€km³²7ö•eApot7tc \\É#¨ÒÉ.Ş\"Š4xşO—Y^Â¦+Cz#‰®X¶0¬ èÆÃ.hó!#A½]\r9Á°oY¶cª‚ó€¸¶§üÿHğl lQõ1“`[ŸêÕ7ÁÔ6†àöñt3eA=¤HWX:n	T2•ŒI87Z‡ø­e¨T™x-S@èÂ•±Ag\rî–Àïœ¶â†xà_(§ay§\",;O	ú\$†X–èLAôÂ(Ÿ˜:|P…n° ÌÜâèr‹à€16èD·ˆÑII-q%¥ô“âàm¡Ì¡:èÂDĞ nJ½…*h!ˆDQñÖ§ØNÊWâûFh}Æ´ÄÍc{‘\"¢\rÂ1\r‹„¸¯Æ(A„ |kÎ\nJi>¥T\\E<¦9:ø¢áO/eÂÂ0F¬À˜A#rDSÚ¥˜Å”5™8yAtš™“\$2Ì²#3•¼dpĞ‘+šFŠŸdés'kÖ9«\0t\rÎ”\\ÄX1–˜,»™PWÈ	ñ†è(Œ|ği³ÌâJ2ĞOfù©2Í1’OÇÆéİJ~P\nè\0v×ZûÀ=qQKá;ŸñFT³¶…5å‰¨uPTH7ÑGŞÃƒ»–(®Rœô`ã\"øR¤º¯È\0l2‘p9‡.dŠ­\"\$ áş÷åP‘Z-lÊş¤¶9´Ül/Eò.Tb ŞL}O3µD«™p•…kàÚ‡EÃràc¡Èù·ƒtøÎÃ®p^ÎàtƒHx2g™d'eÎÚ«'_\0è¢Ú´Â˜bÅfëü3 \\h[ş¨1V+ÄØ}¤¡O³ñ°6'ÆAÃ9bPÆÉm\\PtƒAò¼ÍÙR³Š\"Ç†ó²ç\\1¯ç>²‚8õ=«¥©-V°­•û2›\$»C‘çuIĞ¤my»_HÚİ•*VÅ¾•€\\¶~r:ÍMc£Ø²TíŒw¬©°°Å\\ÌprÄäÀ´¼ïm )áÌ5©kœH.‘YÏÙhsİñ¾o\"Õº@ß~CyÕ²WöÿÇ°@LoôÔ£'bXvãoi^„}Æ\"¦Í-»ÀÆK´KroÉ/hö¢\r\\;ßkn43*WT±ÃqUC1°P¡kŞlAb¨1‡)ï0•9Ö_cJíq-v:ÇªšÀ\\<„Ğ­KK÷O”ø­˜²“»È’À²ôEsQR,ly ãJgêeK	c5…»@÷îéaÎ.‹’˜ä‡áéTæHz[×¼æ‘KÄ¡¸Û°mg²µª2L^šĞZçĞ-6¨æTšlc b\reÓQe©gj`6:?H†«…UÂ˜!+)œ Ó8Ã–Ce(\"ÚÕ[\nÃœ'ˆººÚ¬±qµ¡¹)kTÉFs\$—•sÓ8Úm\0GYîîÍÛ˜âk«³,j¢ËíÈ®İë\nØã›¿iğ)§9Ü\nWu	O,àç¾0ä` \r_7\"LâŠ1u´ßü8@>»&§àVDw§ÄÁt‹©÷78äÜĞw÷´ˆ=ãË9I9xˆ¯âLİ‰Á—:ëİâÅ#‹øE‹œ?\$ä¼›“íß(³œÆğ³î\rSdÇ;â`‹­%Ê­øuä¹sÀwlÊ˜@Go[nKÏ°(kYè¸¯&¹BÁĞ8\rˆ‡°]\\cßSTıWä£pq©PĞj˜Ô.Q’9bó´w‹JõNmœúf2ïÛ½±ûÉ­†çSû¦öä¦“2pm½r“ïàyw„³Ïsß/ÏüĞ{äşt>‡Ş´dÉ­Ü&˜“Äôëµp cÅ·ŸÏ¤ü/s°9#ËŸQæü47Ê‘IZÄH€ bÎˆÙB%ox³ë~}WİWuJØóBƒØ4`“\r‚ï¬[Ä0ï62	Âo=A¼“\"h˜—×3ÈÆØæ9 ˜¢œ–c\0tàBh¨0ßâ^8ÖÀƒĞ tM`ÉLÄ\rÖ Ä°4Ğ\$†@(¢tÔÍ“ G	z[Ğ5€ÅĞ&Õ-VUìš ÀØ!èÀü,„¨KLhÊŠ¸7àFp…ğ`Õ \"€Ù¢˜«€ä4(ÀÃĞ~AP„pˆ?ÍUĞg	0l†@ĞÉğ¡ÀdÀf@fé¬fÜB ¯\nô2ˆfåÌG¢¤ß\".,\rú»Æb<cÊ¨@dßìd>PF£Š„Àl®ì•µPØ¯or}kæ¡Ñ\"koĞH&‚«¢NÎ\nØK˜oÂÅƒ¤İp0\rçŠ{€ÈÁ„H\rŞVD‚š!àP\0YQdÀb€S`AGÀ¹ AàÃ1gqlQs1V„PEDQ…ˆÑÎ8ïÂŒäÌ£BÇæÎœíŞA\nº!P@f@k‰¶pÃpÊñğâ=È*¾8ğMqÊ¨¸Ğçå ‘Í`êZ« ²JÄP@h…\n¼DìİË×K6; Ò6¦ÀE±c\"ÇÇÊ}ËHò1¾ŸFH^EèØ0ÁPÈÈòD„Ã¢\0ƒ\0àÃ\$øÛNhe r|\rŠh@@Ä[mú†1Ş@häZÁKè­ø¾ÂÈ\rĞ\r°OB>gr`À.‚òf;²u'¯rR²;r%&àw\"¦5#Ú\roÌ%‘+)ğ\\RˆÁ‚t0\0à.`æ¡îĞ oò^Â«\$p)\\!¥Ä3ZÏ¯y bÓ\n2\0Zªf\r*jjnKîQÈã)r›qĞ—ÒT!’[2‚)Àé1+02ö«*,,¬\$H Ló0øµLı1Ì€î‘ÁPmå½32Yo 0+ ®Óì‘/E«7îüó¬ÜdQ¤ŞÛiä'C4Ùk×‹7R[’&>1²X²»\" ç;\"8 âĞŒFÏì\"¿l.ÂŒ5=3LÃb^ûh}‡Ì\rsé“Î\rÒdeºğãÇF…Óg7£î¿Sñ*j„ dCÑD#rÅ\"ìÌ=2Ë;HÍÓüMòşÏc\\*ã@“ìÂL//L!…'&\no\0÷ÌIbÆzğH-Q.JP‚”³Q\n!’†üòŠßPÍÀq9RpÍ‹°´òª9ò„> eHãÇG\0ñE,FBóœ®êò¯pèßmúËTf:K–ø\"@¹æÆ·N¨ e,}àa?Ô²TE´ºËQùÑÎİq×\$¯ˆçÏ2´§£)K«väŞò/I\$qÙ\$Ôé\$‘ÛJğìTîôôó*s\$#SÌ´'IbÕO€wQMøN¯£¢E¨fæ2¶WLü»Ìä¹Ë=;‚Ï+Ó¿,\")-×:ÑÎØêÚ‰ÀŞ)â¾U&´Røİ`f\"˜ û7ë½HWrUs½<MÀm\$ìıV‚°ƒp^³¦½%™Ñ¡ cB«P”ìwdš€PtÇPuñs\\UÌu z;øãÎ Y]JuBŒ)‰5^Ué\\àzÏ4%‡aZåU[ Ï¶€uº,ş9ƒœ2®¸å¼àuaõL>z5×^ÀêF‡`ü gaæÒ‘MLÖ<vœ¶9ôÔ\\@è,óğN#Ü àu ä(Œñõ•+õFj•£0N#uc%s®{Gç’Øæõµu¹uHÇroö6\$ñjcã9–›‹aU¤!5©\$6.t–2 çcv:µ{DÆãWõ‚ÖÎtµê ÄtƒØ\rÀºf(š€É_G¡mïmv8.–ûoäùp(İ¢&r39B?6¤«±s\$­ujwÇ€x@ú;`ìj÷t¢`@z,…J+õåtWIcNu@È\"€áu³uöÑv {eéØŸönÄ§R3E¢Ò¬Í	b'\"\0Z j,€Î¿µezVˆ%-Ş¿°W±X>±w´ğàSn¶ÒšB\"x‡a¢Äˆ×‡f64üê‚P©Sfäct##2ÍL÷çU6à³w„`›×‡—ûJf‡eD6ä’d\nvÆ jVÇVÕªØ0 œÎA\nXuÀt­`Ø\0^àÆ€Üz`ÂâœzB\n\r __ˆà‚–FG šŸïîd ¨Ú@Êâ–ĞXã\$>jÖÛ8@˜àÖ¬\0ìö}\rZÔ“RÖBºÔm_‰¬ü´F8*7Ån÷È\rwÍØˆ2wpÀ[€ÄRh8¯_•”\r÷Ï\nĞb\\vj`ØÊoy}îç~/Ár(}/»B·´Ìøì©×ú2XL€.«xÄI3‚Ë=gh&â»‚6ËW9\"çğ³«\r¸29Ø9ƒØA„XI„Âèš#Û…vo…¸_†%†ur&¸m‡t8xX|b+fè÷‡Ò \rø‰\0w‰X¡J6ÔøÕÙˆÔØœÁ'IŠ aŒµÙŒöİ‹8½\nÅL…SšU_ÉğGab´šÛãu>»*À§Ç(4ch6ÂŠ§Ãf6§	7ÍhMÍ:–	`Öars<<ÑJ{¤Ej¶«Ö¯ñ‰ö·jE•L‘› ¶³ÑtYV½¡Ùól(¸˜¹L+h+*“ôœö–>4•ìÜ´”¹µUR!g™Fâ½jc`E–Sö¿ ñŸÇ· •I™¢–Á¡¢|©¡¹ñl Í“—§z‡¦—Âšc*k½j²k§CãMHb³•\\Û¥Y<`× G7@…1˜µ¨+D3WUù.n:Á1\rq´kdĞÒë<åñ[\$ùí¦Zy©O7Æ/.#¯ˆg,ú¨™£adÍ¤÷û­ÑPDº>MÚgiú¨ã¡ƒã²q£kz%©±¢¶¶dâKq_æo†px¾—Èâ[//µ’<\\Ì¹;ØÎE³8MA—h5aY1»T´‹j›Ÿ“-MSe h!´»'ó·„4F3¸x‘ÜGv%®ãí³VÃgQ»»V­©5¹H§DbU[‚÷‘¯úŸ«¡hÃ™º’ºÛ«»{¼¹a;¼©•±¯ÅŸZ–—F÷µ¨áRE=\$ñÁ\0ÑD#Àfø>Ã.\\¦Óf¥Y·«¢è‹)¨šÉš—h£8Oœ<›â‡\0ËÅYŸmnbØßBÁœ‡×œÎàÛPÔµln¸­ÊfÛñ¯;ÇaP¿hGŸö‘ ;# ›ÿÖ Dš¨;3È7¢:'ó¦»C—å g½”‹ª.phH¹ÆôB-•ÉJŠØ,I4×àÈí²©Õ“¥5ZE²67r: gkÏ^º±PÙë¿²SÃ.Ş‘²÷ÌÀQÍ\r\0ª(\0§@S/”2336;·µdª¬EÀ†D’è£ÆÁMOÃ²v×õsÃø,í\0º J(Ø+`å ]?İX)æ=Õ“MX¯„jYÔÕÉÕ=WÕª×Öetj6¶ .†2;öuÎS³ÒÂÕ5mÖ ŠÄÑ™îWET¡4 Ü²+úô K öÜÀiXã æıµÜR4BÖP Z\ràÌ†UÎÜ¼}bgLœå´¡f]ğW@c,8ğ}l+ß¯Y‹£‹ğş#ıÛÛò	ÍıŸ«rÁÎ«	Tñ’A’Üû®İ\0>ı+ÛtŸâ+#¬Ëãâ7Ñó6Òœ3äıäÈ1sC3\$›Âü‰h^a3SyİŠğaæ#ÑÅŞ]è¡4¦Ós£ÇµH÷Œ<j\rª±ºE^.ğˆgL”áışaÊuèªñÍ=ãŞuêJuÂ/Æv4>¸à@gèŞÇé\$û,T;èDî‘^¾j•æ^]Wt  à5åïŞ!ğÚuM”uã‘<BAêoEê®ALXçÿ\rJê…¤O	'ÿ-è^¼b{İãoï=ë¢.‡ëÿF#ÿKìêqsõ?WôDŞLu Qjiô>‹õŞã^ P¼İ*¶#¾öD³OÂ»£ÇŞCÊü…±~{·ü±ú³Ú\r²š~>:j»¹¨¶¹{|­Ê[»'ÛìY&Åí¿k÷ÿqötÎÚ±YÍe´“¢´Aé‰p€ÚøRâı?ıììaKÿ‚X\0003°-°	\r¸\0Ğ\0/¢œpcàØ\n@:€mÈø?Ğ°€‘ÂÎUHÀTá°)€ĞÃBxÀXdo0C\0f6´¡DHÀFà	Bÿ–v@´z o€¤àŠP7À€401€€DwB#A%=`à£H*\nÄ‚ÁO€¿h)Áz	Ã\$é ğÑwı@¶\n)}É* \0ØAàv\nd çX0ÁV„`') J\\hH7Àª`o¬ …ˆ;œZĞ‚Œ!`Óh=š&Äw\"Ü ,=Áá]Èa¿l\$ÑÂÿq÷A¡‚z;ÿˆù\0õÂ˜€ğ\"@ ¿ˆTB¸d|„s;![8XÂª¡·…¼\0ØFP%šb\nä\0Š[HBä…ËF!Y\n˜0C>ĞÎÔ-à¯˜[ÃRĞ©…ô!f8e•ÍşÃt0àwè0¤€ \0ÛXR„ªp…l;aß`õÃ4¿Ø…L7ár  :¥!_„¬4¡_(ƒC^ Ğ¾#èÀä1b@ˆ÷äˆtD!òfæ‘(ßàS\rıDr#Ğ¬ ÄCJ×hQ@z’9T€Â¸@À¶\n»„H ƒh™ÂZ\n„| ²øšB!=üOÉ«¨\\E \0g‰Ì\"à!h8@B)qMŠ\$O\"o\0006‘ğ§ÑAƒŒ,\"‘˜ªE^)1N\0YÀÆL¨¤EBA­‹<QâÉ¸s*€B‹¤2ô0x;Eâ&J	Œ\nbÁè¾Au\0 eˆ9J¿%Cx\r„œZ+ÉcÕH#†q)0¼\nMÀEÎ`Ü‰œ_`EH‘=0y0há\rÈ­ÆyÿQ:ü\"ØL¨Õ3°.iL(\0Ä•6å”à Å;ŠDXb£xÓE7Ğ‚„hUcrGa0ˆ%\$2lpa¶¥ØÂğƒÎ\r¼ã©HéÇF&°H¼`Æ(È†ü8!G!'BÀDò>lØ6¸\0\0rh•®= S4FB° ª@¤­F€éd Ú¬IÁ¡up£zH´ rNÇŒ8k–LyØ~?7G¬rxY#âF£ÁGĞ\"¥°£ñ\"l ");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:›ŒgCI¼Ü\n0›†S‘Øa9œÅS`°Çˆ“Œ&Ó(°Ên0˜†QIìÒf‰›\$±At^ sG²Étf6eŒ§yŒÊ()LäSÁÀP'…ÂáÌR'Ífq]\"˜s>	)â‘`œH2ŠEq9ˆÊ?ˆ*)‰”t'°Ï§Ø\n	\ræs<ŒPi2INÆ*(=2ÌgXá¸è.3™N„Y4èB<’L—üîi©Ì¥2İ´z=š0HøĞ'·êŒšÃuÆtt:œÂ¡Èêe¹]`pX9ŒŞo5šgòóIœÜ,2O4ãŞÑ…MÆS¸(ˆa…Š#¾Äàç’ïø|¹G‚bèôüxœ^Z[Çä™G¼ÎuTvª(Òm@Vò¸(†¼ÈbN<ŠÈ`æâXä1É+Œä9J8Â2\r£K¶9ğhå	 Áè`…‹ÆëI8ä›±S±ãt÷2ƒ+,£ÆIºã £pæ9m@Ğ:ƒ€æáxï)…ĞüC…Ãxä3…ñ4P7áü-4Çr\"p3Fhà…-5ƒ”U4Í‰¸\\6°ƒ<D\$®l—9ÍR4t7ƒdD3µpŞÎ“kÌ:)\\;° ĞÔğ\r@t…\$4O£<ş†!pdÇÔÚQJ\rÌHî}:&Œ¨ˆÂÈ„Á5YWJ­˜‹±Â`ÓN£èbKNSÉÀÉa§•ƒ´d>2WñÅ…bDj:9[21c„»È€:Xé@ËqË#“›4íL™'J”©+DHeÒ3¬.«O ÇKË°“ˆ…pV…át2Œwp;Æ“…íÿ\r?èOzDq.ª°Ğ-†\"ìZñ®cèX3!/>PúFìsØÉ²±Ã0Í(òóˆ°Ê£€àŒ‚T63sVQo¸€SÎ‘ b²ß…^r\$É@C© r2)©Œ£ “VÀ)+nÜ·zÃÁúålÚè{³K#…À9‹{†Û¯lÀºìmĞQ¨ëh»*É—PÄ:¡c˜]´7ãàø=¡LŸŒi;”2û¿§­ÜÒ<\\Jí¤Øb¥n”…ƒ¥nÁ_iÓ´îJ\n†¢¨âòõC:ª„‘`N4¶Ì–È'Aw:4}ÊÛ£ÁW\080‘ÇL3õÊJ;èiú)\\„=/NŠu=ZV6&ceaè±ÂpŞÖ.[ëvŠtPZŞèX`Ö”õŒ+zú'¦ê9½.\$\$…Ó@\n\ré]_ïÙ®¢Âh¨kk¬Ms>`Ì–ƒj¹%\\9Ğ¶ÆÔ('°jAˆ>BCd\"K\$	CAÆ ä„¤.Â².`‰â.EÑæ´–ÌÃyy\0‹D2Ï8t	Ğ6†Ã8¬FL«´×ŞíâŒB*¬ğ,Ò|\nx\\@ °@¸Ø3r ¬­ğÎWKQb,%…¯´DBfØÈ³D|ÍŒËE0/2>£Y!Ä†'õ™`æf™mHº<BãB0\r*\0Gxò‰nêY4‚¶¾Œ,L²©º–öÅ%SÆ,ıv‡0ê‘–XòQÄ1†HId`‡!.ÔVÊ›H/ÅúÃ—ÀHãù0ÆUÁ¸0Â™©`îLI©8ÖÃkŠ”2Œ4JYNÅ&8xä¥JØk:AKã¡nWØ!¦¿Iï;'ô³\":2ğê‹4Í~óJ„8ô£á’‘¨âG‡™\"MÊ=\rZ'nÇi9F§œ“™rÆ’RÊt‚3\0Ÿ”Ò²Â2µy‚B^òèb'´ÒzÈÉ²(­#”d9Itµ&WØjNa¨ÚC(¥ j”Ä–?h‰ÂØj†¡™©Ö„Z\$0«¡Ò¯´J	A_\n†!TOó4Œ<{aôú?˜æo ú‚-¹–ÃÏ?Hlÿ\"2ƒy™=Úë¨ R©ğœÑ„àš°–ÍŠëP&åG›ÀÁ4ƒË%()¤\r5Mª‚‰ÓLTí\0ÀºxBIç=ltvÄ2Jhvû´~/:èpı×:8\"Ğ´5¡«‰0î#*ì7ªøúÜ\nàq×>è¡G\$°â…):	ƒ»\"ù#ë¦KfI‡!vö+?{¡Íÿ¾Qg¥{ÏR÷Q øCäª}Õ#¸éiIbgà„ÔXàÄÃÂù}ÅË`‹}3—%@îÁ{_kø}0ä±şÈ—Öp !°aï—<7«e•‰ÖF‡?¦¸¡î½XüDù­Ñ, ØÊCk‰ƒíU™ØL>£1‹§ÜÜ‡¥ã‡Œp0#Ä\$²ÅâV)pYs5A˜:°ÊUÈ(9…5×™,F+&Ÿ*{âŒ-£Íìç:÷Ší :7¦ş:Ê™yPãè—´ŠÀXÏ+¤’\nŞI;üş\\s„÷Pà÷1‘‘ìÈr©¦NJËAT'-£”òk?ƒÙY@“¡Ïö±fÇÍbñ’”RîJÏiömÖB~ò©”K\rK«œtª4à÷;OŠKc”9%Hì5àÍd¢3ÙÀe8j¿P÷±[sğ™9,ƒÄ˜—bzK‰µÁòW&e¢d8­ú§)Äùé5•pí˜hù°ëéÃà¹\"0hL5\0˜7 æÚŒÚ‡Ÿ{ïÀİ¿¸İğî´<åk‚²\r+üXÅblåè/ØX ìAC¨s\na¤‘l÷Çí°}·~İ´— drx(\rè3ÎnGrÃTÄ+àQÏÁJ¹éï†PÌ\nØ'?À€Ä´n~º:· µòâQà8€»¦†`{ÙaÜÊ æ4:„ôLê:Ò öğ§›ÉÜuMó„®ßM¯IÁ…,†`ÍBgN€¯Âÿ\rBº•\r\0ûÂoé\"¼/‡2^D2)n¸\razR\$à7¢`ÍØ¹¨äèL³p®*Ò{`Oqt–z%%éHg§¹¦ 0¸…ÍKÃf&Ì)\\ĞQW¦öù‡†\0dp¾Ü<Q\"è„c”ÑÏ'ÿ/ÃQ7>¾+ù¿j#\0åîÈºĞ‘_ğÈôk3ëJº(óÜê%OêŒ£\0³Tm4³k:lÊ¤mD\$°¦¬×\0éê´èº'¢~à¶ Z@º€¶ŒàVâº€L\"ãHjnæ¾5€ğNlŠÌşş‹šfj&›Mí•OüÓdbÓ°RÓğ´OdiiŞNĞ(¿%-4+Ğ:HpR¦§?BàM0š¶JF¢.ÚòÏ1Mö»f~U¬Tê°ŠÒlË 0…şËÀòUÅÂ|âÀĞ‚@òˆX4àbgè ]Pè?@z `…â<ğĞRîÔú`úí-¸şF˜ÎI\0Ñåşã¬¦|Ğ…ğ¸ê¸Å¬TkQk°F@0Lõì˜Pƒ\rÀšˆ#ÎuØÍËïàÜ²pXÿ^Ñ±ap\0\r y´Pt%\0^8ÆÒ\r¤Àµ‘Šk©£\0Ç¡1“\n¢dñ…â B± §.\níQjq\$\rMË¾F£ê®oî²êî(ï¸‰ [‘ .#>¦ğ¬Q„`Y`íMÑÊ,ÿJ†ñí\n<³‘uÑzÔ+I ÒÃ!)Üï+ØtñìÅŠ¼Åâºÿ¯lÆœm\"\"17\"jÀ0#N±m– ÂÙ¢æ–O pRÂK#ŒRÅç7#C´&ãÉ!2\$ÅÒ>†Ïœ”CŞ.R\"Ír‚ã\"PÈyË°7¨\rçÜ¼¤s)Õ%Ğ#‡U\rOÄEĞ€Ôøî«Æy”xCt@Ğ¿¨û*HàÇ é+@ÀàÈ0Õ\r’˜‡I‚¡ìL²¸²˜‚ˆ/ \\\rNR\r\0¨@+û\$Š©/*w0ËS\nt¢\"ä–\0ær‘/¬ÃPøÃğí\0ù3L¿°í%rïRÈ2R*º+÷0Ó\"¿-¾3N1âD7(tb’ê/@İ12º†M6â†¬dÈ(á“c7‹*–Épãl8²„å(t·0ÚKpÚ2Ù-ĞæÇğŞFbîƒ\$¼Røï(/ó+2îã,Ì²ËlºËï8¬Ïø–éróK!ç©6\"»Sa0bxÓà¾\$O\0\re‰ ¨\r\"8ˆ'‘ót³Œ\r³ù+£Pá@Y1°£Yb”Râ¹°Ú\\jK)÷438 hÌ1ó7 z`pğRR“CÒñBöîô<»Åöõ…”F	4çDtJ-¶tVå©D6\0NLåTå”v_â0ó‹\"qJ†ëIÅ•è*Ì.ô¾«àqÂR|´¯HÀÎ t]>ˆ\0€OL(#én.®2Bn9Jm‘@R s2|”Úh”ŞtãNn6B“cO+âšÒ†È e­¤ÊåĞËBO=,ÀÀC:Ô6ô:¸M<àä—BV\\`¦/BŒïÚ§Û,w:‘H°Í¸û2xpšM„nbn«¢Õ„‹0†ÎÕ	1Ö,4µV§#& lËâ×ÍjKCš\n‰gÍâl\rè¶IcY@ÏY‰h–3Û\nU’]@Î	 ÂÔ\rLÕdñ\\Bœ ú–\"t\r¯p'\nå‡'àO\\©ÆRĞ˜Ö³Ú5øáS†¤b%§[•¬\$‚LÕuó`5—Y®òÕu©[ÕÌÔ\0|EMh—µË\\)É\\u¶9¶bÉH.e@\r€à!Åe'µVPä¶C'c\"úf(RÅ‡&#~À–\\qHû]Ã{^Âğ¿ög'OÈ<vz‰6lpÕâg'8E–{ô*­/¹UÖVû‰¤ş­pì¶ıo,ï¸+´Ôş)X¯ëk.ÿ0`ÿsğÓ0h“r“°o^²œğ¦†°ŸB\"åjçOk-õ§%Æ0Æü“gÒxú+Ø Õ[àP7\"*hPP„\rc <ø[`æëV¢ â7å:`‹˜Uà°à(–I¢ƒs*dã¶;·>	—BGsG t:À‚8d\0@ÔjwLvj —ow7v b	¨püàæñÃu-ş\n€ , u:)âÕ\"ut…:îWB<S†b1ñò2éC×²S·¸d†%)rÀ÷pÕ¿{cpqMú!şà#P‘ì·#@ E}c\"@|d%kr£\"* xñí€ w}×´uWâ¦Âl&X~S‚B'uà@6ChÂº..ÚØ'Ø+@ÊêÓƒƒ[T÷¬1àßæşb\"Ğ\n\0\n`©I\0¸n+—/Æ\"lW1uÆ´—Z¦DøCâ(è€1Äp¶wĞ¼…®Ä À^\0ZJ`î¨b·#ãŒ5€É„«ˆH“ˆ¥;ˆäâ(à°¸Ì!`È¯#^Â»y…ß§ƒ…¨VGrß|Â_ïµpGåe‚QŒjd'2I-÷áÀh¤ ^Àda)×…:HØH)Ä5q·X‚¦FQ_·Û{8)~N~\"`™\$1øøå ”ùàñ³‚ßB_‚üàå€ ñÏN^¥h[˜Nø(”+‚ÃM„wÏ™P€'pŒ65b?ƒÑ´â†ù“y&<åZTãq,9Op¹@2M¾‰ØzÄ•Pq4`eo¥”é¤b\"fmvùX@…c9a0Çw Db ø~úˆ”‰ˆW\"u@·J‡rŠi8È0øè0—ü#³}7+€¶ok¾@³öœ\n)lÑr³Êı%vÚÜ‡Ë!¬®Õân{‚XYw*,Íìb™«‚F€^\r1Œy5šğBYùÕœ#w:3&jÙB©îÀàğ„fY`Ş“— ù§BI§š|l¨0òÇÓ«ãO£r[rEa0bÉ‹àÊ\n ¤	(€\r¹öGFª@Ø¼ÃúÙ­Àß® 1ÓÄĞ“S¢Âs+£X‡´%@u¨g9zfS†#0 ŞDBÍ _wÂé¯EÀÕ Bî>š{§ó÷*@Ğ}kã²÷È½à¸à\\P’,\"ª-rCÉrVäæY×·Z\rœ÷É[ùS}\0YŸ%kŸcÏ–2ıvs\rK¹îÈOÅT@èçs›Ê!Èü2ÑÒcwË’­ívÇºÔ,4&™rxrÒØ‡ì~€È#Ì\"¿€Xã\rÎ];SF²½Fî‡<ta/­ƒMé&ìU>ìÿ5s ¿ÀSÀçÿ>Æ6¿ì¬U{öåËp!\"yô7M’me÷Z„D!*vÅwæWê	‰û0Êw0ÇŒ1Š|H\$&Ô‰+{ÃìGRH!rÔ-ù24‘lµ¦\rĞå\r™\0ãŞÊt<Æ…Æ·fè:“DSÀdúeQóÑ\r\\¶aò°Ëç¹EôbGÏà„m äg¢x-T’¶ÅGÅYKÆ¢‡tp0®?¦Frx	ï2\\òVãÁ2;'\nÂ€‡Á+ù‰b1İÎDG–5´—¯l'(ó¥/[Å,N÷Á(nG8óÀb€XQ* àÁ-R¿–¢¹¤\n4q#[Uš<eƒÔÄ`æ&&Õoë@î›uÒ%â5\0¸ `\0‚E}#lÊ¨Uäx%m‡Y&P®bÍ•«.ëÏÏ¡Û1<jnÇÇƒÜ\nV~o´Nïp\n€Şã\$EÀ&Ô#íŞ%G\0²ş=¼ ekİÒ–QŠCÂ<}ö]ÔA½Ù-Yb;à¸†¥[İÚüş U¤YßcÇÏ~¿šT.\\Å<Wn\\oPÀÅüŞqÆ‰6P\nsàã`‘º„ü¦c:–3›([ÅÀzX¨ÙÙ{ Pì\\Èç‚«²€W®ãY¯:ß®:ıä#®¥½9´èYê¹[¹Yút&lç9kŞ±ŸY_Ò‰bÍ~¡¢&Õvã	ı*1şÍÅ`ÕfÌ8—·S§øV^ÛÜ'åâ¾î›}±»l³Ûz8üØÿÜæ ÂZGbÜÕ_àÓ]„â¢ÄfpJŠ€Z–0Ÿ¥@Vãÿ'õuö–yÆÌ	€ŞCñR'Nö…—?Yôå–Ök €è\$cöáÎ à=ì¿ní	äYJì>PíRì¢Jğ•×]µß.µäì§ƒçÙÚì»};;S­Ç]ãñ@ËÇè:Ââ“­÷I~Û‘•ÙùÒÁ|;¾£FyäÆƒåÀ}`ó/ßã-éí#ä1¥@yõ®7øïÜys}¿\$A¨a\\™<xGŞ•Ö¨BmamZxı3,}Ï:Ğ\nİd9¿‰Î‹ö} HŞĞmµT,/KêÎª (œæìShâ…:Âø°¼Vğ,Nµ\\ ïÀø\r€B%¸YŠvãi,•å€pyrrH”ó&ëdL%(ë@L¾Ğ5‚’T@1`Ù ¦:”Öî\nc‘,b×O,ìâŠ\"Ô£r(áf’YÓO-°¤ykËà*&ê‰,kä•yIP\n‘”£rpE%ËÌ`àó89Ì×…¥lëUN6_‘<EªåédL êK!Ÿ—ÄZbÕkñ*‚ºóq©¢‰C\$ÅÇP®¦ÍòäªsHnIÈMÙ(ˆ¯ƒq…ÄD@\"8÷¡\nƒâr–f—èC\rP€pKÆ£à®›Îd–L!Nˆ¸R9¨úcl…i½!a :ÂÒ\rÄ\rPSS—ã„*„…Ì0a ¦,–Ğ±d4Q\r3v†¹ì±LˆøÇÊ˜ÁÃ°Gn\"3ñ%QdŸµğ­‰)¯i4Ñu•sÁ­ÇˆXÁMP¬‚^«ä5¹O’¥	bépé xyèğÉTqDnBy®CàlĞq\0X“°2ŒE%	dF…‚,7G‹á±& µâRi¨„#ç€‰CV¨ÆNÀÚ\$¢LB!(<€„*1|H\"Eu<ÜãªP0T|sé¾)C(oZ[ÒµSœt»îıùú¢²m•\nnƒğ â•à6<ñ›/> “ªÿ'Ó|“#hàÅœ˜6è¦\rñ.=(Ôv±…¥;`\"OøCÜ!âBŠ9ã.B!UEÌDáÄ‚d œ–€)ºKŠ Œ\0Ş» ÆmF~	B{O\0¨Ï©¡¦_éø³u#„–5 =LjÀò7´9 š6­¢î£lCV‘€ŒTpÀÚ08±	1ÄÎx'0@gIw€Zã†@9ÇLá\\v\0_(º\".Ğ¯A[sÅ„ä€ê7I(azl_„EĞ¦<ñ€“tƒUöë7`tèÒ0ø‹(ßà3”=¦ço\$[Ìh×!¸B¦œ[HîR¶œœ) )nxaZ™#=HË8ğë›¥ ”’%ş@0w5J’–	¸²A\"F:8NŠÏ\"Xù- èÔ­¥?pj@)iUjƒÀ™\$Ìš-EÆ÷”E§´\n/¸œPÓB–P@y8j¾Y¼Kğ³9	0ÊH€Ddš&0Œ¡èh“X \\Ñê\$Ë(ÁĞ`d\nEÎ¤À@ÉJ“b*NRP\"(q.f#“dšGÈæD¾š¦M’n9:*€¶fĞt4æò:p½Mí(5%ÊQ\0e”Sb’4ú1¤ÉõeM‡),ŸR‘\"k§m?Ê\0rB¿( è\\èšÅ••de<£\\ÊBMò’i„¢L	(Åh›ÚRÁ¿D›e\"r™CÊÖRä•ô¬å)9EJâQÒ˜>	õOÂ´ãí`šAÈ#®bh|HNĞ\$™%Z#˜4-® 2=ˆD‰ê„ñ\\´æ0Ú…È†¶õ\\’\"©aUR	Ã-I¨ãk0\0ÛæÙ‚ÊÃæHıH³ ÀÎ~u”]QƒFš1')-¡\0'óxüeüˆÑ·ŸÌÕp\$ÆQØeaş#\"ëRÇ°Àœ@\\èÂF0Ñ¸ÀÕ#\"–˜&<¬1ÎHĞƒÃ\" BªÂğ.ˆş#h˜ÎÃÀ/ù…TmA[€ç\rRŒ(ÌÂ¼@%ÙE8ÌÂÙĞ&\$	`Eà€ŠÃ,B]À(a{„@ù6I›¢k3[ˆhÚ	ìEw\0¡1®)%æª˜ @Úªÿ\"ˆ6ˆÙ®aJ¦I8J+4q€Úa¨±0\nBë2É—àa“!{q›•ŒÛ„Àgá1!9à:\0¦Š&D8|8Á\0Ë:á5P1ƒ¼›0‹ã:y„ª¨FDHÄÎUk3Á’…USLKôàfŠi‡mB¹Fk§@EPØM-ä;1ˆ¡%Òá82ls1œ´!&û5¼ÍRaÅñ—ÄÂÀú’4’ÏP%¸„eOş/¹¨ˆ±³ÈE‰I@C=ùùMHÉÓôd°çË8@¹–à9rI¼Ğ€£Š*B,› Ã^ğ‘Ò\r˜Û€NçŒ—4ˆB“™ZCXÿÂs!	*@ENø)»Ğ”4àa\n¨Â )¿¸˜?`+¡€&‰C01M¼SqDñ€ŞQŸBğ\"ï¡ ‘‰n)ÓM¹¢!x\0€Š5Æüj3w\0â£‚ğ0!\$\0`a7º¨2Q¶Zì>I4ŒÖ}ÉxÑàÁ½›ÊÏÚZu¶\0´çñWÉdd4J2„†26\n 	À¶Ù ŸÅ…æ€OhÜFç0Èš\0=Îƒš%Ù1Ú\rÊAàih@vM)’\0¼`£&Êa2ù´Kši©KğfhZUÆ\n¶‘AM(iéP€ÈW47¥|ò©ZQ†ş:¨5X>x#5†¡s=0Rªå>„“7úÓÀiü'èÙ\0Ê™£ú)`hşRÁğ…š—d`œÑµM‘IQ\\V´ŞV‚ã4T²¦ÓUãåR%9F“aºhÕ47œ]Mà_`>P~_T!¡†ÑN\0Î.lÔú%ÈC(DZSşqu\0œ¸…iné»˜2¡áÙHéqCÔM`”…AŞMqQ¢~«5p+ŠAZh¾¡3Ÿ‡Å¸\n62¸URbq%B(\nÀTØó‘œ›FåâÌğ>œ8¿†GM ‹LpiÈ¢EQf‘M&•.Â©OQ\"=Z{µºR¥åïl¨aOêïØ«”ık}° Á-´~+Ê`µewíWêÎT	Õ¨º2ß˜’.¤1RÒH8H¤†d€Á†h@0Œ\0[€@réŸ j\"„ı¸êöOZ ‘1r#¬tQ@7—V5kÈ+˜ÖÉÊ½Vlï¬ì·\r-å®–¯U„İ\$\$XÚ¼4µ«äF6{à/ˆ‰Ç–P¡óZ¹s½|Œ\rcÓ€f™Á˜f¸?	•_«™XÕ”š°•†¬@Áë—â0nlŠÜ„Yòg:×°ËSæâä›sª~˜šâ¡9ëî×Ft\0/Ã\nÅ0']y‰á^ŠÇ#&¹\rHœ†j‡R0ı:æ¤â‡£¦äD7J¡Ÿ~¿Ä52Éælë”D­}J‡TàeÎœ% ŸÕ}¸è+R#”°k3T¼İë¶\0rYuŒh¡‹ŞŒf¼“Şleù„ØAï1S•TØP\"±¾PhŠE¶NœŞVK`2Qò\0e©eK‡›Š>IFÜš-Ã7Sê=Ôù•BÀ¼j¢N5U÷[ñXl'\0 2¡…j\0;ªÍ‘’ìú®J\"\r4hE±FXômRö\0Q‘Ö·*/X ”K£{hÍWÚ‘©”l€êm'j8€Ú.êFˆÔsUÔ©µ\"iş+bÒÊBÚUl1 ¬¼RCGĞ-­²3Ş)3å\0ø'ÉNv?³³PeÒÔÀÂZÕ/óiãOİ]6b“|1T•ªÉ×jØHÚ¾×@mµà¹-k_TÃÅPè–¯\\©¬\0æÀ69¸°nU¶{‚-±Õ5Â!²“´øGª³çÎ¾5ãšºm®S Á´\$ë£±øm3õÙ%˜`[¯B©/ËešØÎõÉTm§i‚N›o£!âàµ.È\râ÷0¨6 ,lí¬\0äàà:&|\rÖ»\"M¯¡kw*ÛrHVó„Ãœ5Û‚Ãjàá Â„YpÒ“ÙX\råw{Uß…qÄ’Ü\$uâ¨Ul{‹Û\$×¶ş5mÀ(ü`/¬¢—ù¸4/nIp–j\\-³¶ç_3\\)òës×–çW–·mçt\n†JR—D¹Ñ‚%tŠ\nİ*‹Rzá2>²°\"®‰a²\0Ö8Š1˜è¤/sÄ@Û†Jì'l—Hu®k Zªç©´hÔ8§s}ÈšP§)R*“Übûe%²í·o„Ús– û2aQ¡J†©¤Õ°í‹qkÂ6g.	¼R“/({Ç¤~ÙEŒ©;ö\$İÓt†löÃmIêºèGR:iÕ'—àÁApªŞy€üÛ­DMº/<¦ÜwÂºÁàp\rÀ\"•Âá}\0ßPS€'éŠßÜ†“”pı¶k`CìÜqEYÀ3Êd¡èÉ|p{ó DJ;úå÷cHTšÏWnW<)M5~ÆY2÷–t9Š©âkŞR<ı«q#\0¨ıep7Lø+Óc¾ Ú\0u\0\0®mÔW¾‘c}[* <÷Ø¾Î+¢ër7Æ@+·Ô^/Ä·ûò_ÀYÆ¿ £/yƒ6Ù¾ş«%œXÛKRÒÚoƒÙS¯\\¾	m/ˆg³PÃÂ¾ÉV–­%D«¡GÄOiuöİt€åN)®›Î¯&ú†ySô0jn“rrÚT”y×myˆk!É8UšøDn£Bş\0÷l¥¨PGç.[‡z··|†8bGõx×Ñ\\s[µ#¸?>:£\0Xz	f¯´ f.â£4€^  9‡ |šË\r§·z+G¸Z¸D©È?‰5A¢„A]¹1Ï±5‹7bvæ`|1»èk.‚LUëÍÚ/`Weñ©'âàkû¹†k°ÜŸàÅĞI\0wvu‘]©-˜Ó%OÈb3ó¡j•bŠÍ™T½A%¯à&êIÊÜP£cBã9Í‹{yBßLtVÖ?ØÊF:hªUd[ËÑ ük±–8OSV«	káZÑ|â€*ÑU¾Gû˜-k¦&ˆÚI–‘Èİ”ğO9\0®€Åˆ˜ÕeQ>7ŠÉp¶e[¶<¯¿Ræİ­ h\$®?Ïöäúª¾AñÇ‘ÿ-×!–iÈ|¿Ö¿…ä[UÎ³ïfEÆ§‘’SätF™RUÎHÁ?¡Z¡¶¨I@â¢Ã‘‚šÖEY*–½Y²‘YúÔZEĞöÂÂ­=–ì:Û+Ù@¾VĞ6„·^ÃÚ½NÖ8VK2‡’ê ¼#èbÉŠ[2ç-	ñ…k2&*äENškV¶2Áy¼ùW8+Öœq°Œ&9„1åøù+Z“Dªã\",¥­œ““‹Êƒ#-šÉÈ4ÿ5•µ—‘cãxPŸæÌ•ÓÅlXó Ös-P”Ï‡BÂßÕkFŒ¸ÖŒ\$5m€W@º¨\0›Ò—!úÌ`@ğ¼ß©²\"áOõa7œš†Ï14yo®us,|d*+É¢ee7<Åœó:Çß˜¸Ôá]œbg!™ùÎbsŸH\nr˜„nÕ–É@Ø@ör Ÿæâr€)0 €’à\"\0\"Î€òO4]ªŞaÄH*•o–,ë€¬.CpÉÒÉ3>Šu©Åx5™äú‘	Åæš³ÓÊVZ–Ò€,,\ršfáHl÷e£êè:Úe™Z@Î]ò¼½\rs@¨%Ë\"\n!ìk‰úhÊ´ËeÈ´?åÄji: ˆ>{ÉšŞËŸ½! W.ºEBV‘åË	\0002Ï9©¦Ëæ­šC¼Ñ\r4íÌûóP+.Ÿ‹=5\$KbÍÂùËh(5\0©I¤CŸèì“ U«ÅÇ4'V”°(-¢!0	À¨­ÀÈ•:eñÔn¥Ã›©’:¥”-F®‚µ;/¥#”‡T<¢ĞùMVH/O¦½±´Û¹ÂûQ®€Å4h-âDş5ÀU€\0‚@\"€€	àFavœ@à€y ëé'‰;.HnrzxPô^€ÿ[áªûbEĞÖD;SYãåÚ	Pôï :1¬ÇN‰iâ€wfíw»Ü1ÀY½¨ù™| FâDiZ×¶D|{q”RÁà0\"³Íç(åO³ÕDîƒ	—z`Ò)Ş`-ˆ Ä|è5Ql_c.øküö<Ù5¤0§zÏÒ–Ñü›ÛßĞºe˜†dí\$’©\"şJè÷ÓSİÑû\n\rHK¿_Ó„”tà4ç€s›A\njVğ´ñŒ!oÚ[l¶œOPÀQª©¬‹wÑÓ†Q¥9ÛÑ!…5€ì¥\0¶Ym‹g„õÛ(@u¶§ƒXO_éİa~ÉÔ&Ğó#( =:ã Ã\0½µ×k4WñÏ\0]IàŒ+šf	FÕÈj¥C#Ûn7ˆ?µöô×N Ní’´)Ï&zİŠ‹“o»¿h¤·BlM½TU)5ÜËp¾t€¦µ›¥tÁä¶ùºî¨\rµV.è]û¹Í‹†Ğ»¡nç†JÑív… Ø¶ï·t(ÍÉn¸Ñ»±İœD2)mÛ([Ïr©˜Åë³2z eŒ¿¦ñ¾=Òn*Ìvûw8İÄàx+§<`	2½GFííTBÛ=væh=ºì};L/wîş÷£¿÷v[«cîØßîã÷)¦ÀnL¦*§¡¹ê¡ã7`7ôŞ‘ş÷©_øˆ\næ{˜æ‚B%Q\0Çƒ@pyæ÷\0ûÁÈˆnè'Š^îåº¾&‡Ó6Ş\0•È¿‘Ôğ†û»ŞÌƒ%¾EKÔÈ;,á‰â·PeÍîl-•:ÙşïgÄKüëXTØEPVP. èP ´¼RØl²ë±sìOmtâ•êhô’ô ñÀ¬#”Uv…Ï²=}ì”a>\"‡õàÆ½ˆøo|RØt£Më¢û<fM SòãZ˜QBà¡È*¡o^ğ&ÍŞ5Æşµ€*D²QşN»\$*¦	ä¯	BrD`Íòe¡Ó=äç'¹?Ê•T MxkkÓZúŒ}­Q²‰[~ùŸÕŒš(qmQ:ü{Ş‹µè¿ó×Í²°f}N@±lCaùğˆê\"N`ˆùAP“cÔ€V0\0ÍB’fİÙÀ…ø„P\0Iu†5ª4›³ì÷ÿ©Ğ`°:*†`şQ¢wRó(º¸éœêÆÊÉû7È»™jj÷gçdc°™ğ6,É/%ñç2ç¦#³òûiÉ»8\\nÏ§‘—ğqö‘SuÛ³nu4?W7\$»>-0ÏµĞ¦-7d}y¼…[áx‡ñ~»¸0òSükó«y{!©sü°ö(@6p\$a:Ê¨€Z5}\0üç]BßøŸgŒÔÀuTT\"K@€uÑş­<Ì.ªugGø›±n¢¿ÚŠ|aâx¡ÔÀÇïª¬ÿX5é‡EØõØó@tÃ§Vw¿ü?\0½ç„ruYë‘¹Ï.Å?[fèÈ9Îñ9ô3£®	I\0—Ø°š)±OuÉˆz*ğ’ãbí+\$Sª9ÇØ~‚vŒú}+–Ññ„«Ùtwøµ‹\0\\€");}elseif($_GET["file"]=="jush.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("v0œF£©ÌĞ==˜ÎFS	ĞÊ_6MÆ³˜èèr:™E‡CI´Êo:C„”Xc‚\ræØ„J(:=ŸE†¦a28¡xğ¸?Ä'ƒi°SANN‘ùğxs…NBáÌVl0›ŒçS	œËUl(D|Ò„çÊP¦À>šE†ã©¶yHchäÂ-3Eb“å ¸b½ßpEÁpÿ9.Š˜Ì~\n?Kb±iw|È`Ç÷d.¼x8EN¦ã!”Í2™‡3©ˆá\r‡ÑYÌèy6GFmY8o7\n\r³0¤÷\0DbcÓ!¾Q7Ğ¨d8‹Áì~‘¬N)ùEĞ³`ôNsßğ`ÆS)ĞOé—·ç/º<xÆ9o»ÔåµÁì3n«®2»!r¼:;ã+Â9ˆCÈ¨®‰Ã\n<ñ`Èó¯bè\\š?`†4\r#`È<¯BeãB#¤N Üã\r.D`¬«jê4ÿpéar°øã¢º÷>ò8Ó\$Éc ¾1Écœ ¡c êİê{n7ÀÃ¡ƒAğNÊRLi\r1À¾ø!£(æjÂ´®+Âê62ÀXÊ8+Êâàä.\rÍÎôƒÎ!x¼åƒhù'ãâˆ6Sğ\0RïÔôñOÒ\n¼…1(W0…ãœÇ7qœë:NÃE:68n+äÕ´5_(®s \rã”ê‰/m6PÔ@ÃEQàÄ9\n¨V-‹Áó\"¦.:åJÏ8weÎq½|Ø‡³XĞ]µİY XÁeåzWâü 7âûZ1íhQfÙãu£jÑ4Z{p\\AUËJ<õ†káÁ@¼ÉÃà@„}&„ˆL7U°wuYhÔ2¸È@ûu  Pà7ËA†hèÌò°Ş3Ã›êçXEÍ…Zˆ]­lá@MplvÂ)æ ÁÁHW‘‘Ôy>Y-øYŸè/«›ªÁî hC [*‹ûFã­#~†!Ğ`ô\r#0PïCË—f ·¶¡îÃ\\î›¶‡É^Ã%B<\\½fˆŞ±ÅáĞİã&/¦O‚ğL\\jF¨jZ£1«\\:Æ´>N¹¯XaFÃAÀ³²ğÃØÍf…h{\"s\n×64‡ÜøÒ…¼?Ä8Ü^p\"ë°ñÈ¸\\Úe(¸PƒNµìq[g¸Árÿ&Â}PhÊà¡ÀWÙí*Şír_sËP‡hà¼àĞ\nÛËÃomõ¿¥Ãê—Ó#§¡.Á\0@épdW ²\$Òº°QÛ½Tl0† ¾ÃHdHë)š‡ÛÙÀ)PÓÜØHgàıUş„ªBèe\r†t:‡Õ\0)\"Åtô,´œ’ÛÇ[(DøO\nR8!†Æ¬ÖšğÜlAüV…¨4 hà£Sq<à@}ÃëÊgK±]®àè]â=90°'€åâøwA<‚ƒĞÑaÁ~€òWšæƒD|A´††2ÓXÙU2àéyÅŠŠ=¡p)«\0P	˜s€µn…3îr„f\0¢F…·ºvÒÌG®ÁI@é%¤”Ÿ+Àö_I`¶ÌôÅ\r.ƒ N²ºËKI…[”Ê–SJò©¾aUf›Szûƒ«M§ô„%¬·\"Q|9€¨Bc§aÁq\0©8Ÿ#Ò<a„³:z1Ufª·>îZ¹l‰‰¹ÓÀe5#U@iUGÂ‚™©n¨%Ò°s¦„Ë;gxL´pPš?BçŒÊQ\\—b„ÿé¾’Q„=7:¸¯İ¡Qº\r:ƒtì¥:y(Å ×\nÛd)¹ĞÒ\nÁX; ‹ìêCaA¬\ráİñŸP¨GHù!¡ ¢@È9\n\nAl~H úªV\nsªÉÕ«Æ¯ÕbBr£ªö„’­²ßû3ƒ\rP¿%¢Ñ„\r}b/‰Î‘\$“5§PëCä\"wÌB_çÉUÕgAtë¤ô…å¤…é^QÄåUÉÄÖj™Áí Bvhì¡„4‡)¹ã+ª)<–j^<Lóà4U* õBg ëĞæè*nÊ–è-ÿÜõÓ	9O\$´‰Ø·zyM™3„\\9Üè˜.oŠ¶šÌë¸E(iåàœÄÓ7	tßšé-&¢\nj!\rÀyœyàD1gğÒö]«ÜyRÔ7\"ğæ§·ƒˆ~ÀíàÜ)TZ0E9MåYZtXe!İf†@ç{È¬yl	8‡;¦ƒR{„ë8‡Ä®ÁeØ+ULñ'‚F²1ıøæ8PE5-	Ğ_!Ô7…ó [2‰JËÁ;‡HR²éÇ¹€8pç—²İ‡@™£0,Õ®psK0\r¿4”¢\$sJ¾Ã4ÉDZ©ÕI¢™'\$cL”R–MpY&ü½Íiçz3GÍzÒšJ%ÁÌPÜ-„[É/xç³T¾{p¶§z‹CÖvµ¥Ó:ƒV'\\–’KJa¨ÃMƒ&º°£Ó¾\"à²eo^Q+h^âĞiTğ1ªORäl«,5[İ˜\$¹·)¬ôNô\n«[Ğb÷ƒà|;‘éîp»74ÍÜ”Â¢¨ĞIŠCË\\ŞX°ç\n%øhØIäç4Ïg‹P:< ôõk¦1Q™+\\ÚÈ^å’ ™VèøCàòôWàÃ`83B-9F@ànÃT>»ŞÀÇ‰-–¿öÊ&âÜ`9q¦…Çßä‘“PÜy6Üå\r.yñ&£ñ´ÎaÌ‰ÍÃE8Ÿ0 êÀõkAÁ×VÛT7ñpïÆxØ)Ş¡~¤M½ûÎß!áEt§ĞùP\\èÄÏ—m~c½Bğ\\\nímŠv{µÎù9`G[·¾~xsLî\\±Iõ®ïâXwy\nà¨çu¯áÁ™S£c»¬€1?A¼*‡ùÍ{œã½ÿ´óÍ¿á|9Ş¾/–òş¯Eúï4æÊ/¿Wÿ[È³>–á]ÄrÊı¯v¹~B£ PB`T¡H>0¤BÒ)ğ >¸N!4\"‡À¦xW-ÅX)„0BhA0à½J2P@>ÈAA)„SÎôn¼ìnìO˜Q¢¬ÇÎÊb®rõÔÒ¦âöàøïhèí@È‹’î®(–ğ\nì†FìÂ˜ñÏ–øÆ™…(ìÎ³¤ÛP\0÷NÂõo}¯‚l«<ønŞø®ˆâîlëoq\0/Q\0of*Ê‘NÑ½P\r/îpA°Y\0p\\ãï~³ĞbĞLh °!Îã	ĞPöîd÷.¿ïy\no\0áÌËĞ¶öPptùP¡ovĞ‚kn¸\0z+æ›l6÷°©¬Êø0’äğ¹P½oF€NìÏFô¯OpıàN`ÜĞÖ\rogğá0}PÍ\n¬–@°”ö15\r±9\$M\r \\©\nggìÀÂ Ø\$Q	\r‘“Dd‰ÆÊ8\$¶ªkşDâjÖ¢Ô†ö&€ÓÀÊ ¶àbÑ¬˜ê°¿‰›	ñ=\n0ÊÕÀúºÀPØ ~Ø¬6eö½¬2%Íx\"pß@XŠ±~«æ’?¬Ñ†Zelf\0ÒZ), ,^Ê`ß\0è8&´ì¨Ù©‘Ñr€© ©ÃkFJÂÂP>VÆœÔp¨²8%2>ÂBmÎóØ@ä’G(²ä¨s\$ dÕÌœv†\"Èp°wÇÆ6§æ}(VÌKË ‚K¬L Â¾¤éÄWñöqú\r‘şÃÌ¤Ê€QòL%’PÔdJ¨¦HÀNxK:\n ¤	 †%fn‹ã³%ÒŒ¿DÌMü À[#¢T\r©ÀrÂ.¦LLè&W/>h6@êE ÈãLP‚vÆC’ß6O:Yh^mn6£n¼j>7`z`Ní\\Ùj\rgô\rÈi2I\$\"@¾[`Â¢hMı3q3d’ş\0ÖµÈúys\$`ÖDÀæ\$\0äQOf1ƒ&‚\"~0€¸`ø£\"@ZG¼)	Y:S¨ê†D.S%Íˆ’ Ğ3¾à d¹ÀmÓU5‹æ¬ó<£SÒSZ3â%r “ÎãÆ{óe3Cu6³o73î—³ÀdÀL\"àc7ÄLN ÜY Ê÷k‘>²‚Ç.æpäì2øQôĞ÷“¼åÓ3ÀVØ°WBğDtCq#C@½I”P÷DT_D´:ÔQ<”UF²=’1ô@\$‚‰6Â<cÆrÅf%Ô¬,|“27#w7ÌTq´6sşl-1cPÕmğqªÊ\n@ÊàŠ5\0P!`\\\r@Ş\"CÆ-\0RRˆtFH8µ|NíÆ-€Ædòg€‡Ò\rÀ¾)FÆ*h—`ö €CK4Ã1‹ÊkMKCRf@w4BßJÁ2\"äŒ´Ó\r1Q4É2,\"ô¤'¼êx§Œy—R‚%RÄ“SÓ5K”¦IFz	#XP‡>¨âf­É-WX\ršÜê¤pU´ÕDÔt&7@¶ÂÑô?’©ÀÑ ªµ£}O1½2†‡2Õ#UK*¤)ôê¸‹Œ0o<> ]Hš„Æ¿rè›LGNª›ê˜W%–™M^’Õ9X:ÕÉ¥N”òÕêÔséE¥­@xy’(HêÆ™Md×5<52B– ğ–k!>\r^J`‹IS N¡¥4'Æš*œ*`ø>€—`|¢0,™DJ£Fxbèµí4lTØ•û[¨§[é•\\‡¦¨Ô –\\{­Ò6\\Ş–’ öß(#mJÔ£,ı`©I³ûJ‚Õ­ÊÜèlß ûj…jÖŸ?Ö£kG»k¬T9ÀÛ]3ohuJ©ê¢®ÑW•\rkÕÏ)\0İ3Õ€@xè¹,³-Ê	5B”¡¶˜=ÂÔà£#–gf¢¡&Üß·Z`ä#ÄoíæXf È\r ìJhô˜“À´5rqnzõ§­sÁ,6’oÓtD´y‡äÂb´àhş—Ctn˜9n‘ í`§X&¨\r'tpL7²Î—¤&—¨¼l¬Z-Í¬w£{r—¤@iUzM¿{rx×—mÒSBÀ\r@Â H*BD.7¹(Â‘3XCV Ç<WÔÑƒİ|d‡q*@”ş@ŞÀÊ+xø÷Ì¼`á€Ï^™Ì˜ß¬__•ND­X\0Q_D]}tõYÅúp¦f€wÔÚ\"â3øz¦nÂ«MYñùZR\0÷¬Q¤?¸{†M3†•£*×1 ,¨\"Øg*U¡*²¯ˆÌ«zÒŒW5NV2O-|€¾ÉÓñ,×]‚B×dí\rŠñ/OâtÎøÃï‚Ì0‹xÆ†ğ½Ğ®OCë8Ş-0Ò\r”ÿ0à·õ„@]¤XÌŠĞÎğ\\\0¾0NÈï£Ñƒ4ëi¨;ƒØAtê¼8X—x¤\r†…Š“‘ìÁ‡øİŠ×Ê7¬<ö@SlÈ'LÒø9W ÊÎ¸òÏ¬ÖËì¢ÍÄ±•ùRçÌğÌ\r¾Ï ÂÏò|ÜXĞÖa÷ø7y€Ù\rwe¸Œù„Y!ƒ˜Eƒù’´šÂcRIdBOkË28[‡mÌJŒ+L ÈÅÙ¸OXpføÓ9ÑDÏ›·¦ßªw“@Ë“—Y—…¢Õ÷\\yäAcÙ£ƒXgš™%šôó’Â1“ï“j	œX†9Ccİ‡àR¡¹‡”QFÇpdÒ= C˜÷ıš\n\r¥Õ‘ÔóšdjÙ«’xE¡Â2FX§¢x_¢ØÅ£Ú5£™—}q¨Åí¿¤M%¦ZM™:\nÏzWšX7¥åí¦:ĞZi¢npY;ù>Ê˜í£ÙÉ†:6Ú;£ZÎX0ƒ“Ì¢#ùıcàMyU…i2,q¹FËšÈb­J @ÓgGè|4ógÈÒmzWõäÊ	¬)™Èr|àX`Sc‚Õ§ÀË™„óc—¥‡û!²B²—±”»/}{4JÂ\0ÒÃn»Kuz @ÌmÚÑ®€ß­yÍÒyÖ\"º)u¹ÊÂÙã¶Yç˜s·c¶yë‘¶š‡··y¼—¹7Á|·±|—Å{Ï˜*)°Ê4Y`Ïµ[v¹‡¤­‡û^NX•†¸‰†ò‡W”©û·‚7†;¾_‚‹*x™ˆ¹Ú\rùß¼ß‰xm+¾mû¨Ú™	´»¹‹\$\n¾l˜);™²„|Ù ßÚ™¡:œNÚ :„‚Š_È8N³¸Uœ5;¨p+U–L‡ò\\‡9í¦Ùñ“›¡»ıO:I’šû zQºœ¡ƒ¡TëšÜ)ªXG¡æ»ÅJ{w8“¾ûÅ‰¸UÆù\$ôàÃøü›PxTY¾pjh·¾J×Ã€›˜JÙ{‹Âğ@îÇ‚³ øğZ‡ÌÙs•¹hË˜ç–XÌ\0Û–lÓ–ÌàÌÈÎ¸Îçìó‚Y}˜Ÿ®ü^Ğ@u2ÀSÚ#U‰ˆ;Ãˆ|¼¼•¥¼™P\\ŸÊ#ùÊ|ª<®İ\\³À›JÛ‚,öœÀ•\\ÅÌšEÌú…‚]WÍlÁÎ,£ÍìÉ–<åÎŒÛ>YnÎ),Î™rÎüûÔ¼å—âº]Èı	ª\$õĞç½Íq„DJí=•Ù÷•XI-ğÅ€äÅÌa‡llÃµ]\\“w(iÜCÄ×ƒtƒ‘<i-u[uVDÖ“¸QÂ¸€xb€kæLI­.kú›@ŞÀ„ÜN‹“[ñ¼l<o=-]1`è”¼ªdš ÜMÌ7‡@Û%C=]ú›êÀ/|-àÜˆ¾ÉŞáqÃã•âíùâ*¾C¾òO~ÊQâòså`·ç(âòãDÉßÉ²¿à[ãşæ>Éká¾R™uéŞ\\+>)3íûPÊßP§Óí6ÓËM%º¡¾pÔŒœÅAĞ3qmu2ÖfzƒÛ¯ì4s‹	´í`Û‘ì°-kÊS%6\"IT5½‹~Òì\"™íÂUt_	TuvàÖ½ä¶Yw¤†­0I7¤’L‡\$ú¿1Mí?íe@3Ûq{,çÀÏó\"&Vi·àÔIŸ?¾µmõˆ™¯UWR¾´\"uiT‹‘uƒq­Ÿj\"•GÃËõßò(™ï-½‚Byîê5øcİõ?Œàwñ®°ëTúî’`ei¾½Jtb‰gğU‹3ËëÉå@öá~ê+¾Íï\0MïGè7`ùïÍ\0¢_Ô-ùñ?\rîVÿµ?øFOÔ6á`\no†ÏšInª¼*pà™öeÙí\"T{[Ğ“p^÷ä\nlh@l0[/ö„poóJKÖX“ñ€ü<ª=€9{Ç¾6ç–<eßAxãÀùÇ‚¼Éá4x[ÍLò“~>!åOQxš{ZVFÔ`½éÈ~Iß–“øL)Q[ëTûôM›àşT²*BC¤~	æâ‚ä\nƒò¡gÃˆÅ…p9zKÉ–ówzO9di^›'‰+¹ßïDz4ägHAº¯Lyô¡\nr€<IêjKQó¸Snô==\r.Âo7Â½Êé%a;‰kÏãmX¿›Zi%P¨iÏ\r­€¾ıµ/©…L`pR0¤&õ—I (Øá\\.£*m„*(ÚÖõ—\$ä†ÆÀ÷\nw×ŠĞ¥…8a“\n&´Â‘ÍUmª MÖ¨P+\"Ly„ó?¡M\n€2’	L\nbS ¥NäùÇr¶!w¥jw`¼Â\$îôƒráè…Êaáv±^Ãq­F‰Ü6•Ó¨i*™Ÿæ„ì_xõØ\n‰fğIê:B&ù6@É“KED¡úú·QD(V`.1\0Q\$íøF­¹H®’Tş€zĞ†‹Ì\rªjkzM€ĞÀ®Y™À(61€”x‘+®%dj¸Æo\nÂ¦¬\rg°ï\"ÉŒ´ˆ—?Œ1- 3hÏXÖÁ)åyjÃ5r¢N±#Q¾¼Š¸w{_ş¡øG)ÂÎÙ1i‹Ì íç¤<Z‹ºpX³¡Ö\$â?¥=%.´€Ò®&¾­%\\±8w­!¤µa4œ<JB[ĞÄº¦u4‡%êŠ×47‹Ä%gÑä&¸€Z(@	€E¢{@’Ğ#¥–2Šh@Œ#ñŸø™ÑŸ¥£@\$8\n\0UŒìjãA(×2ÀO€Š8Ú€5‘¸Œ¨@†ğ&'´\n€D\$i#À#Ÿt\n PTs#]P*	àDÌuc› PÀO|pc—øËP	Ş¼i#Ô}ˆæ:<ñí\0\0¥ÀˆÅ¥lo#}ÏFÜR‰Tp@„À'	`Q¬ycTp(ÆŠ@€eh\0‹˜Õ8\nrx› cş<`Nˆã:)DY\n*Dı‘2{dZ)A‹Ú4±²¤€cZLğ2ÈÊ<ñò\\Œ\$r#ˆşÆö7ñÁ¥°!û€´ü€Nª{O¼@\$<	Ñ¢ğVƒZÒÆ52.Aù#D0 \0´ÀI¸û\"P'H	²_)¼x@Š€*úàAOh£hI)I²L1¦’ìƒäµ%áJI‚B‘ş’g¤i\"p÷§K2}’ä–Å(CËÉÍ=²t”xCøĞ&FÄ	r“ÒoÙÉ@@'”ñ€%	 ÛHŞT±áˆ	ãÔ˜:=¾)\0.ñ°]Îâ5 .ğæõ(pÈÀL!à8­\0ˆ¹	éR\0L‹YaÔbkÔ°ˆ6Ä)Y·éˆî •Ô®£	h³zZ¦õ±’IgÎVO3oœ­Lgà3ËY2ãÛ‰ÜDoPË`3Ì¸ec-‰r7í‡2Ô—Dº‚Şç‘B¼‰Z•¼¼%å/I{MÃ\0pĞÀÌ.`äÊİo*•Ô¯%T€ı\0 &–iR\n™+Éo€ì©–\rÀ^2q”Ë©\0\\¨I@‚	KÀ#peC*!>€/á%|È…Ì’ÁŞüô\$è)çÀ§1P30(\r¢+\nZÆz„))\0*®\0kà€ÙÅ2¼–Ï…(–E86å¶s—tºf&”™Š¡´“+;”Ø76&ãK–_(›9fÓ,@-ÃÉ4l\$Û‚e7\0ù±:l“LİæM7.\0ˆ³|›ğo–JÛ©ÀÎZ³u•ÌºŠ'Èy{ÅH,#\0vU@9!¼¥	Ñ'†¨&„òGôøß@_-Ù¿³ºt;Üê¡:©µ€²u¡<—ˆL†iÙÎš_ê€Ø£@U6°Îù#ä_€L'~ùæ/Öm`\\Të']=Iäât°Ç¸Âà)ÔÏqùsÉ9Âa<RPÂº|tút&5°äs©lî@¾	ŞKÆwS®èlÍ:9úN®wSø|·göÉØOùAĞŸ<ë‰BÈ€\0/àz@´	ÍÏÁ•Òå†=?=iŞO‘kÓŸ=\0E@iâĞ\$B× hO\0Á>DÖP´ó‹UäçÑ†j¥HìÂ9F¬BcCi‰é­BwM§tÓx€PÀÙM‚?p“®=—äì8ÜÔı‘Ïlg~¨˜tÁa©€%]b\$àØ\rˆr„èÄa,6ÅtŒàW)\0U¨›F˜	|æì“¢ˆvh¦Qú*¥Oƒl.C\$À\\ ĞÖRRÌ<lcù™&Cj3Ñı%ôZM¨öÀz9GpY’â¹£\0i\$Dµ‡d‡ñzt[')[)Q¤ØêŞkÁpi0·#cÃ¾‹ôNE¨ô(ºC2L	Æ@9hÑEJ5Ò,šh{&Jzö0n€vª©>[€j“£Û[œ]ƒK•ıRîJë>.;ù¨íF=RÚŒ<råÓM¡=—Ô’¤ÜhØ^Y\\RmnËĞğ Nn*g‘¦ôÒÅB¬·5^QÒ‰@O¢°x¨¡HIÊT ´â9½)(‘œ&µ‡}A)PÊ\\/êô…_Õ!ÌH şÚ‘¥¤ù\0éBá­\$z4ÓTYu‚J’v\0êƒ”¨…%@æ32\0Sôm€--Gi@¸úQÅ%Ñj©Yİ+FuzlS—”ÜW3ØÅ·OrŠU\$EÔè;¹M©¢\\€Ô±Äu/£õjeQªš¦§,#J¡ªXPÔ<UH•TVVé#Uê™ÔUbˆOU´DZ‘â¢µ£Í8êÕUJuS «À‘g)XDZK‚•¢Bî\n¼@2Š©ìx@d&ü ½eÜ«Ià@ÊFwì¬8“©\$Ù'IºV‚V†U\$²ETÎ_ğ*ˆd¸/áFCÓYdp§vGƒ‰3‰ ‹Ñš‹L^(ù`áj”÷2S¸ºcÛW¨ÜJQYiÖHB”£ckœRè\nş²U\$jê\n„ZAi€î»¢U*wKDRxW‰LÂò­ˆ€+fÚŒ@ã¨A4¢àGz…R\n²5‚b¬\\_²Ÿ ­ô‡¡á0¼C@¤\$X\0+Å]¤ÑÂè\"?‡n¦€+QIj\n»x\r€ôB`S¸âM‚ÈÑûŠ\r o°@‚À6XÀ\"{±\0µãb ¯)–ÁM¨cMğW ä¶D_áÎ±Ğv@{cĞ:¤®%[%‰C²ş1¼Ù;AÆˆÌTn› \0º a²páóe~ÙU5 s©V†İe|M9‡€9 hË@æ¦\0êÙ~É@.³	l€· Jv]©ºD§f€7¨FÌá±³ËùŒ,/+:¾‹íÚXIi­\0U¢â@Nµá´\r Ê¢,².½i¶‡ª³m_ûFŒàÖõäÀYiUÔÓJ¯!©gûLj‹ãÑú¬D“iKAà6²õª-U«KfÖ_N€\0ö-3©ìÀã3+¥dãiûD	\"ö¯µM¥ml‹L…XÜãã¯¸Œ>‹&|UÕÑõ`Ïh¾ù2¦ÑĞn6İ…·ÉI+ØnÃ©-nDÃ×`„µ†®°É”°@ã¬B!;X™smÈ¯·†pC`‘p5Á°¬¡O‰%Z/Õè5”³é#CK`‚XˆªÂcb°Q#«§Qa»–…ƒ¸q…èpÚİ÷)™®G+~Û–ß÷\"ğlM_^zò©šæ!ÌÉàE«”Ğ¥’®šÀ‡ïa úØp86ì„åˆn+oì’Jâ¶ö¥¾,¹¡ó‡¢ºw\n¢]ÍƒpëŠÛRÁõ'§eÖJÕqµ'Ü¨%£'€nlO‹h@>NBÈŠX5,ˆ‡‹¢ÊrGr¹ Z l\r(ªË‘jIù†±lŸ¬%b‡;s+±× ¤Wg7¨)’*e…¸1µ•ŞÑ3“L e@(»p\0 ĞÃèds®AñÖD\0Ã\\bD§\nuê/&1¬ŞXR×¥Eæ¥‚5¡Tœ\r§}7õ§”ªîÔş”AÙ¬áÉkâ\\–øöÍµ´ŸÇqà2Ü€öZ-wo´“tßZùƒ‹¯]ó-yq2j+Õ†¾Õ­Ã«¬€n¾XA«Û\0†\0º¾+S•+ïY6_BúV7z®nZ@Ì†²Ô·Æ´]´-UMJc*¢ü¸´®í¢s\"ß+\0·ï¯x´B3^«öà0\r÷ÜÀÎïÁcğÖ\\jÆÆ*¬P-\\Q8ˆÊ·…l•cË%XşÉVB‡}‘,€ş;(‰`*Qú	\$áïÛrßÂ{ÁKøìCúÖ%¬\r¥ˆx	ŞøQû…,¶Ø¾¥×/‰vàä\" pÁã¶ğ~ Óáã ÅJ5eãü®Eš-^âX;c²\\©¶×¬m‹´7£?˜6C*åº®†,7®HfÄ/Â9eÌ0[@ñ¤!bê®íÅşUĞ‘=›Äi.Jocñj;ø—B³\0¼ƒï]Õ”ÑúvÙGÃÜ8àO\\\0ÀÇŠüO©›\$•.&	p‘\\‹H1bØpø’:F\"8Å¶…ş‰ŠøVx©ÅıµR®–xä=À3Æf1Š+|Ò»\0ÂBÀ¼kbÌPÇLÑ’£ô\$zÌáàÎc	¢ÇĞi,Pcb,pÃn(¥Æ,¸ì`'/»~êÙkÖµ‚Îp€q-›ÁÈ±¹VÀÜÜ†Ü\rÙ	\0á‘‹dSˆÓÈÚÍ+º\"Šéˆ­1\0(Ä-’Ì1~útcªşfı¸àBÛ‘b}Ø ’Ã0<1\r°¨¨L’€»\$¸ˆ2d\"1&ì™Æ€BÃ³N…Ô\ràB\rrƒ«\"?vädäZá±.\".\0?wä¼9€oÃà\rÄ0¥Ñœ!¢ÍdR€‚ë¤¶\0‘ÃÇHëÜra%ĞŠØ+\0yrƒH¾sÏ’4W#œ,\$èô \0„*xBó\nPÌòü|„ 8@/ \0ø2U’°ábíİè¢ÂÎÎªxÀ!¨d§°óúNÿ3SÔ?£ÑP»…€(òg\n8·‡ppŸˆü€S9õ@‘'  Ç\0úyµÿ\0¦y46¡H<‚öÌ×ô\n`S’ˆ…¼ÈûCY¹’„”³jp:\0N(ÓŒáX4ŒkÌÈÓgßDy‹<–n4™£ØrS<ÒÏıˆó¯?¥\nÀÇBãúf('™Ì~dgÓ™SËÏ?<³ÓVg(1™éãæƒ2ù£­—²)ÕôŸf`éZ€¼a“>t{ÀœÉŸô’>ñø\0ŠìPû`O¼\\sŒ<õ?4äwŞ~³ÜÇf@z™ÿÍ~hBW Ìø³á´ŠxhA¡¡ÜO'=úPÖŒ×²Üö±ë=óúc[ysèÌûgâ|¹‹Ïæ³%™Mè,Q³ÆÒ8'X hlUs®…§Ù¢ú é4ËÃqDıÂx*8g§NLšBÈ–¨;§}%eû@YìŸv ho!\$æ›NcCXì³@Ğ;YH'Á°@^ à·Rf^x„\0^osÜ_fª—“;¨Ópj]²:’Ô¤ïõ.mLêl\rš®V¨\0ó@Ü€¶Ê\"ÓÕÄ1%Œ!_êô@-]8f¤ç -Õş±äa]Y¯WšÏˆh`(‘¬äJë@…ÁÖ\rˆ—õ€Y	kB(€xÖÂ:5˜B\\QkO[:Õ0˜Â¼¡­uk›X¥\\×P\0ë[öx¹ÀÅ®`ŠRIGÕĞk5°ğª§YzÍ×PÒ™¬=†l=áõÖe€\0ç•2=k` Å[K¼‡Bê½Ìû8¶C±Í}k«c{#ÖØ¢„ølŸdfF.Ìµü-›AºÿÙ6º†K­’•¤ĞÖ×Pàv„'¢lHiAİÚ8C¶“®	G„`GbyÙ¾·Í- 0•Ä¬;[*_ˆ¡ãmlH{(;Uo¶ÕÑ*Ä]Š,Ä‹åŒÖÆÈşôXË“¡80Cµ°K	­!N¼õÔ(I`¨³	V¾Dv½§íšwá·rpc,ğåŒÃÓ\0ää 9~s»Xnã¦‡¢Ÿr[ec·4dçpÅi	\\…Èe2âãl±ÄaZCk»gl÷bB„™¶7x%¿êè½í€Å»Ùk`ì\nÁ(@Åº«®„5åİ˜¥Ï­cÌ‡#t›–Ü–éãE½}Å„sñ–Lvö÷E¹ï\nQQÛ”Şæú76}õ‹Or»çj§b¯%@7‹˜àÛµßh³wÍ¹÷n£kÙ`Víq·±Íòï³~›™ß~ø„4{Œßşå÷ë¾óË;òßï8p2mP+ dÖaX8&,=Òn›}ü!/øK&\rŠÿt´H™Ó)/øYÜ”†6@å¯=}ğŠğEU§lKÃü\\kÓb[×â1Gø®­M­)™J¨xXÚEïTä¾	/¸\"-‘ë…<4ßxDˆ¥ÅíĞpÄ(¼3ŞÊŸ·ß´'È+Û\$\r†¶<rí×n`H\\t\"ş¶70=ä·Y×Wéhsğ­\rÏw¼~°!ù0@6l‹\\† •§/şBò7’¼‰–ßÏ>Fÿ‘Ü‰\\¶¼RÙ¾-Çn‡€şÜ§\n¸?F~†œaŞ×+xÉÁıëñ¨\rœl,fúCß+­îw•i¢GøÛËî.X!¼_à71ymÌ~ñ„œDå¦È7åÊé	÷š¼ÆåîûÅGÍ¾gówƒàb/89¯ËxÑ@!R–9¸eÍJq˜Y¼hß'3¹ÏÍÄ¬*÷ñXw‹Ë®^—ÛË	¾7ŸÎî5óÀûåÖ`ö:î#È+Û­0˜·œS¯ˆ@0óo7:&~r(Z·‘G1zĞşˆ€·¢pİÎñdNŒï“£›`ç¿/Fz@8Ñt0ŠZÌ_ ‰ªÎ0³™{Úè¿Lén•‡×‡oEËÃÑâ=rû¡‚Gj]õ H•¥›²Ò·…»ŞAf+ªÈèVº•º­mœ7ıåßB‹ÛÓî*q‚ş}cãwØ³=Û„g¥»wE¢-H·°€»·¦½&Rh4—ªMêZÕ_L½©]WV'ÁÕ¦§Íñ\"uŒ@-ÜaMÃsº@9êL:ÈÕ’]ù#‚İaëoybİ\n\0[Øêrğp*}Qí‚bwßÛÓ¦?†ºâÿ;Vc¾Ê°›»	«.Ûsç´¢XíÖ°ûy·R=§&d”ã·rûO«çõ2Åj!Ïux¥ÜÎÔ§R{NÖ&øµÑ»®5ö„}£ßvyÛ°1o8Z#ş{ÛNärû½İÑï‡Q:BÕHzW{òïW{:ìrŞ÷ó¶}D\$§j7)àP€÷ëÁĞİCvV¬X—¾ıdí¨D7óá®€·¼,Ôh»÷á_ø]·^í—qÏƒÜŸxO»]­ïŠö¬?p{Æ\"ˆğOŠ8Qáµ?xw}ùJâ?9kâŞüx½5buÛ&÷øÏo›ÅÆ^ñ†õ¼Ÿ¬>õw“g]çíh¼#ä?+÷‹ mï(³¼¹àÿ/ngŒ	é5â5<ù;‡ñüòÈ…¼Ë³½œxÍ%‡³‘;ì(³ŞVóŸ–;Çço-ìóË½ëòÿ.eänkpËÂÀ_ËFäXõ9ÓWjQ¥ÓàCBØ§åv3R=°ì†¦;aÙ][yËÈ»4Ş/¢|óÃ##v	@_Ç­}UçM>ùßÌş1§»\rC£MúqƒCŞÄÆädÄ˜U#[ÓÉ¦Ÿm\n\\Ä\r6ô'Ï>‰ôÃiI;€R\0X€ç<rW0[ÀE°dHSèH\n^×\\”¥3ÂTû´ÀF÷xB™îÀ\$	Òi÷´-‚­'ûÛİÕ÷Xf¼}\0#É¤	1êo·BÆ€*;Û1±(\0ø~@)ü§Òh>³ª{³â~Ûøw·ÉH/vL\n9È?doÒÑğ°,‹x)#>˜#b`',úgTğ¤È~¯tˆ	€YĞ}Ùï°/]-'Òü\0¾(ØÈ şñ@Ï¡î/Ÿëä…>¶Š~ğolH‹âÜöÿ·½À/qû–DƒTúéö~¾¡o|ÓìaÉş°°#|F8ÍûdœÏ¥ò/±|“ì¿u÷¿€Vîâ©hø\n>Û÷ÿ°{´	Şõ÷ˆıçï_{şGâ IaùE½÷&{VNñod¡õÃFÆBÀXûï×½ÙñÀ(I¦N@Yû¿Çÿøÿ·ıÇğ9»üÉ¿\n-èû{çã@RıoÛ½Ù&‘o^3Y¹÷ï»>ğ¯†|”òŸø—îş-ñóö¶ùä~åı/»ò?*ù`\nÏú?—Sæ!VùŸîÏ©óœüïîÿ>ÎèÕ¸}ïãşOâŸ•ü¿Å>îıRMïûºƒõãø?b@\nOÚ?şà0¯s\0ˆ¢IèÏ€’ú+èà'¾’úX¯¦À,úƒò`'¾¦óê¯Ô?€úÓñ¯å\0‚Kà¯¸¬úCéO…À2út©>¨LO¬¾¢Lïv3ŠàúÒ\0ŠÎ[ï£PÎ›ïlë¬H\nhä²Îlr\$/Àı\0+½Øı\0	»£¨	©\r@ ?Kå)<#PøÓîïs\0ø ” ÂÎ?Kæ@Ì@\0ÃæÏê€±ø\0²%,p)?#£îïÄ\$ø\niL€¦¤°3è[Ìå3˜’“îğ?²¬ @Ï´O¼\0ªıö°A|P\0™ôD?²N@\$Á,£İ/ŞÀÿ€\$B?0ıÃø\0‚\$¯²\0Vú’LhÍ…¼ˆ	èé€ùŒ£é½Ê>¤#6ı+ù€>öR:p¾>«7#÷…½\\Ğ³lÎ“ãAoãüÉ<3lø	pe#7ÚA@)À±ğü¯Ü@ÒÔ#ıAV?hıãøƒ	0*ĞZ\0“°*Ğ\\AuƒüĞ_>kÃöĞb?>«ïÀ\"…½cæ©#6>ÒBÃö’Òü \"\0>Ü\0psÁÒ?ÛDPvA\\#şà(>Ò÷3EPŒ¿>ûÓ:­Â<\n´OÅ\0ˆüd\"ï@A\0ô°Aêûğ‘Áò”ğ”Â5ìŞÁÿ	“ø #¿‡	´ cş©	“ş€+´@ÃùhØ€ø÷¤€\$\0ø‹:M3nø’3cêŞ`ûèØÂ„ÑT+I8¿Bò3@*ÀÆĞø	@'Â”\\pM¤8Olòüøû¯†‚­»İM€Ÿcî#üÂíÄğ7B÷h`,	àâ6oŒÂ\\\\.S>¤›DÌÙCù˜ÿ0ŠË´ĞÆ£S\$2ÃòB‚ù«ù@&AŠ>ºLğkù¬4ÎAóÜ­3˜÷Ô°Ğ@½;öÍ>pùĞüÉ¤‡\r¨\n°3|Î\0\nO‹Aø:6ƒô\0¥d7à«@8ıœ%`#Ã‰ˆ[ĞÀ=ÚDåÀĞ\n°ıÌÜ3u’LãóC™¢9ÏBCÔ:`£‘\$!hÚ\$Ó“;ĞêB”20uÁ[¬8°ñC×	Ä<ôÃäúóç¯ŸÃëdPŠÃß|=q€2pí€V>˜û°áÃ÷	|*1\0Âç\rĞE\0©dAov´PÎt'?d,P­D*ü@	/Ÿ#6øÔCP‹BO\n¬©8Ä',5ÃÑüE€ ½ËLq\r?m¤Eq\nÂzşC@+¤är60åCê?3ß/¡Ì“ˆ\nPÜÙlHğ•D—ü¯Í¤5\nóü°°ÂÆãói)D°„1(ú£Dƒï£7ƒæÏu>Üà\nà\$Aæüj4Í\0˜?ê4Áª?”ÑLK	Aæ¢>Ï½?Œü‹û€ÀqDI@³£\$;ğ†D®8	 &¾?;°c€—ÄJØ£bÑPû¯ĞÅş\0	ğBÅ#3í`Â‚øˆ)ªÁ»ÌOĞ3CMZ50âEO6èÔC¯ì\0ÂÀŒ\\\$èÍÔûp[Ğ9BãíÁª#cj<‘1Ä1B;còÅDBhÔ?Ëô@`*€ƒ¬.qbÄĞøX	o?;\0KÜp¤3¥8	ĞRCÌú6/®¤—ˆ\$>lÍ¤pIÀª,!€*\0®+ÜÀ>=÷]±wÅã\nT^pgÅºú#ó\0?\$J@Ä	\0*CÈ*É7Æh\nñj?“ê:pArø”]Y€’ùÔL‹ËDbÑŒàúïBÑ4d@(Dä”ÌcÀEçÛâ@>\$Òà	4¾Ø‘şÑ†©</¶Ğ?\n€/Äº>¬gp>šŒü± ¤I6i8¾;³êÃèÆ‰cİ1¢AZ6€!Æ}<j±¤D¢¤jÉ(F’?dÀÂÅ'óêït\0†üTeÂØø´1– ú ü£şAv?lnos3˜’„50†#Æ>¼ÈòÂœ_¯«Ûd°©¿³¬UĞºÁZPú©4D|;Ğr£‘ÃCğñ€ˆø[9£ê¤¥ú5IÇ5²I‘É\0ûEOÜB\0{9q C‡|\"pUÇZÎPû` €²øı´GcœQCëGPúJO‹ñÂ6(ÚBïóÇz>Ú7ğÏFøöÈ0IÂ:¼vOŠÇ‘¢BÏuEäµ·,\\0Ç¸r8îÂÈûqgA6>ÀıÑ74D÷0qÇG¥ûêÍ>-SE@# ÑÈÎGÒ÷¤.à*\0i\n\\-`*\0q\n\\eñ½ÁÿØ±\"Â—Œ)qu¤ıÃï³nùô@`>DÔ8	\0/Ä@ş„_±Ú€¤üw#îÇlƒÒG‚>Ô„²¾-+ß6¿Wl%°6½·l0®\$5´sÔÅ&Œ\r *\0e!èrÇÿœ€qIÂ” \"ÀæÑ> È˜3EILÅ\"‹â‰94G\$/ñ¦\0—´‚©\0¯ Ñ-2>/„ƒìå€˜üèÓGg\nà/¿LŒq®BP€\"#7ôzñáHMÔ…O‹ÈO\0Ì &£¶2L‘ƒÁT^P@Zúd¨À=”]Q—=çÌKCïEã\0ŒQO¢Æ\\øôs0¤¤>ƒèq—Czù¬†±—G„>¤†²¿ü	ÌÄ@?Œ0Â?ü\\oÂ¿³–èø4Md1‰9€‰\0¼ÍGò?m\rDÆÑü(Ô´LdòÃ\\KJ8\rE’Ğù-24U 0VAÛ”…R=ÈEäe£ş¤5!Ì2m³qğüÏÓAEÛô²V\$ÆüÏ•ÉâŒØÅI9Óü‘	C&ù\\GÀ)D «ü§½òü4çIç#pú«#ÆøŒ—ññCˆù\\x£ø¿C(\$òƒHÍ:NI(J\0Î‹ß\"w\0¿,)PØÇ¬‹íÏ‹4<şÔ!ò=ŞúœGošÄó‹âP‡¿6üìN±QDë\r[;‹A|KÒ'AAäP\0¥C:šÊ„Ì‰Ñ4Åã*To‘†£ÕD˜F^ÈûÉ‘\$)Ï¢»¬\n«É’àÍ)’(Sà‰\0ò’È(ı\$:ä­@à‚²Y8’‹JĞà#ÅĞ‚ë+œ¯\nQ5ß+`a+ ¸iş`6xğ‘¤ª†è: ÚŒà.ĞT‚:‰şa˜\0øŸcv(ƒ^X¨€Â¼H˜O.\"JÊğO\rÎË>ex-¾¨J¸€èKPïû¤rÔ‚-`2²€ÜË_à7€Å-!\"JØô¶òİJêH.²ÚËo-ø.²İ\$ª<¸BOĞ€`> ©dáµ\nêH\"òØ†o+›“§s‚Øè 3ƒ‘+¢± ©6¿/¡ƒa.Ğ\r²ğ†nd»²ïË¨é’?ˆô£z1\0¥àğ‚?‰¨ 7€ˆâà<À?âãø\$Ó\n`+Aw*MQ¼Ã<Pıo¿°?,)#P>”àÂ€šøÌ„\0¦?jŒŞÄ“ÄVqÀ?“£ñ³\$¡	9¯õÆ-üÄ2ŒÌIÄĞîD9Ì³Lg1h[ÌÛÏ1ŒÄsC1sŞ©9Lz?à	 LWdÈovLŠş#ğĞ9`Í¨0æ€Ş‰É¦W·–ˆh>\0>¦¢Å/)Dáü²·Lº¢¡ÀÌÀ\$ÍaÀ†¨9*ƒ<:C+àJËìKPJ¸\"—L\\Ã*bÌò 1ÔÀä6ë4ja+\0î%Qf ;KœE¬¹ÀÔš`è> >7¦tÒHw€¾MPn3I:fàD <LÄÊRÈ'¾.\$ğíBO\\²\nû	Ğø5ã86ÄÌ¹D1‰<\r¼³\$Z…œğ’ƒ„ï4Š%rÌƒ¬²×àúÌş\$€ƒË¶§»éo™^Ú\\°È\0øf[z“e…í6|Ö“gŒ&ñ8+M=6È5ˆ³\0Ò1Idì{™^fqdè¶ˆs7(|©tM.]HSó[€ø¬Ô ÕÍ;7yC„—šÎ¸mÎÌŞI|A‚Ê:`c †Êß8\rÒ…iÔÉƒ¤ßÓ@¬‚P`È~\rlËa=M3ã€áf‰<ëÀRå\0Ï!ûÀ@’ØeØ«ríÍdO‘t ¬‰T°³-æXY9A“˜:38áOÊŞadĞ¥ö’gL³fxË=4K\n&€ôu0KòÍ¨Ç,ô³o7¤€ëÄ†Ó,à½Î3Ë:h|’ÎKbá)AN¬úÄ`ì€Ñ:ØÎŒ€×;´ €Í»*sI&”á«Rsµ>\rX\r!\0\nÀàBsVM63˜KâO×:Ä®ƒƒc5„× úÎæ‰X!AœQ9z%`º{:èHòºDëE€îcv!‚Î,Èôá“:Xƒ)¬(üº%˜Ë2a&Œ«,ğl3Ó8j1è|’Í‡É=CRrÍË<â\$ó\"KB3äöÁ'9…:|÷)`Oj+îÀ9	}-õSÒ>2¬ëUU5ÜôBUNàóô÷²ÑNÄäìS¾NÄüì«ÈO²äû3±KNìĞˆ†¨ ×@:/ç7£ÄQ†¨ç!Ô@.’(&v9ÔédÓøŒ^ş“‡’Ø¬!ï¦[.pGc K#?¸füĞpÃe“Oæçd®€2\0k6)„,\rÿ65GmOFV™dåiÈx,ÿa=O@s³şc6…`Â¤Ø\rJ\0å;‰³H†(ù*rÅ-Œ¾.íMÛ[ BÎ !(àóM¸LP«bUèÛpJÔ:î1úŞE“»¦º!:¢,ô:‚YB‚ò*KRŞ¤¾rÍ0Ø¬Lî“a6Å;6+2Æí)èUB`JsV0È:Ô0_B14/ÎúíAOáœNeúÈ)A~\rÚÈ öÃÌ –NPów“,È´C„î3œæ®¹ÌŞ°T3öq9}SQ\$ÄãA‚P“DĞ;!:À!îæ¸YŒĞsÄÎû6Ø“ÑÑRÔŒFt›#C¨Ï€øQ\\`rXr…<í'ò×72Ø¼´O-„w9Ó¤ùËb8à5€Å3{¡\0Ä7ø\ra\"ƒ\nh[j·ŸåFÛa)”Ñ+€2Ï<%’´M¢ê|®m¸|\nÀ54pˆş	&bUQ¨8\0EÑ¥4AAN,ËàìËFØ•To(ÉG`šO•GA›³êËGlı`:†=è\0<\0Ğëê”ƒ²ŒTÌNÏ¬=.û´ 6Î–(ûSBÄ°ô\0,Jğ?”.º(é†%“…,Ê?B.<2ğhMÎƒI`éÎŒá4ô¶*éË¯G°ëì'ÙI¸ÛíÊÑ9š¾ôRX—E%,O\r,Êˆs³Ï*•(”}<Ú—@c©öRœj]Dş`UR÷Î³,˜.²÷·d£¥rø¦’	\\·N•ÒÆl¸ÀØRÏ-ó“´µËšÜëkô·Q•K„½”¹,ƒIå.ÒíÒêšT·@1\0ÉK 4¼Òı/]04¾K›K\nC¨&•F,¶ô³SF0“ÔµS.-´ÉÊéKÅ2ÔÀRÏLe'ÀìÓ7L…0”ÏËoKõ3TËS.å4T‘:XÌ¾4‰Î9/:WRò9.Í62ôËËJ6ÀS	.ğc´¡Sv^ 0®»ËèO|L±MD%3î 4z3Id\n»ö•áú#tPq5h{!7Z‘Û»2 „ÆthÊ !îK€Ñ7Yİó1S³<»áh‹µ©½Ç-<ÎÍpÆø€jéÍÖà<4øÓ¹O˜%@‰OKBø°ôS¶!10Ô‡SÚÒëôõ‚YF…?UR4ÏÁ›ÓÜÇ!•õŒ~ÂXl´=¨ÇH|¶5QHıC&¸\"1M'µ8¯5a`Å?¢SPlõ`0—\\İmËÈTM,8'1eQaA&	\nÇTRèI¡ÑGÌ¿´ıÍZxôâ6yQÃ´ôñ¼aÀJÀ‹¼üûkU&ÿOXHá‚ÔphQEN†â=Cµ\"ˆLÉ›( ÚçQe@\0;ĞñQ®ÓPÔÅD\"€/—ú\rBà¼–tãµTì\r<eĞÔeS}Om¾—EP­P\rüÓ«P5B•4U\rR==õBSÏR}Hã“Tè#µE\0Îô¥U‚=QE‚J<ıSğ` Û‚¼1x\0ãU:óéOá/‚¼€+µN J`P!t8Õ\rT¥µ7 SõR58\nc>ÇÆºÈâ!ÊõŒ1{Ã€úÓ¼uE€ÚM4{Ö”4TŞíGa;|ğñà5\"SÎÕıNkSä8»DÄÔ?JcU0Õ¯RtB¸{ğ5qSåB„Ï,±\0ÆpĞàÔj†!‡\0006K¼1å ÂƒX@¦D¨V­å_ .Ô(¥_`-Öğ`ÆD¼àua .‹•X\rFÃÕöğõRõ…ĞFD½•‚S÷RxhÁª<mXjïb­ÖWù_G\nVšÄ©èS¸ï\00074Ù\0ÒLRÁ\$QíX›pˆÄÓğù ×ê\$°Nó¡Ö&83&a+²€|l³Õ‰ÏÉQsÀA£…CXšú]Î_X]‚\0á+8+UzƒsRPÎ¨Q\0Ü\08Õ™PóOİMU¶ÔH6!ªVX¤5†˜X…a¤ÇV/kÓVF”ı`‰TŸZ\0D5FÑOS½nákÖóTMSÕ¾U\rTMZÒºBğÍìoÓîÜEgÿWGµfµÅ„-YÁ(µ}V7T0BÀ©œ4Úğ’Âòƒ[9‘5ÖX´åm¯ÿXhét>×LU`4\nÍŒTÑõ††o9­vÓ×FÊUm®Ö\"ıu†DÕ€	\rw+Ö˜\r`©V(ıVÏãPËÆÓjô]Kâœ4°ìoT.\$mDÄµ¶	S’à‚­e@3ÿ×­;@7mŒ:Èë¥¥“´dğÈ!õâ¥Zğ£ôá»Q[œåõÑ5P•µ7;Sôº/BÖ!McÃG¹ÉT»Wõå(V–ÖÔòä¯•<7ó[lÓt…‡^Êô×ø\ri0ÁPÕĞÍa£|VX‰•áÌƒa[x9Hˆõ]¿õ¬^&m¹‚¼ƒÒ¤ù\0ÙXlã¤«Ìú•‚•Ş€»T‹ĞáOXl0£öØ(ô,Ï`€ØoaÈÕu€×ø3½‡U#Îô'0+Ó½8ñ]HT!XX\ryW@è¡\$ÛMQb¹‘-ä)ÓX	oõ†‚\n|Å`-qÎ-bÙ¶U‘VcŠÇÒÖ ‘3N=5vAg\rıŒÀ8<IGPBÔ9O^8.	Xk®ö;+\"Cµü×Z/åÂUUo[i`Ö\$×ïd].âÙ(s¼Ñå“ÔèÕ`-•Öâ½€óqªûe‘-ÂN¿=#[ÖMÙPè…ÅÑO^(B †”6ÍÏ_u–¶2:0mx ­Yg^5”-‘YG8”´AØİc¯VVßÉdô6Í\">\ra­è™^íÈĞ®0õ\"ä±¿R¤¬–,·3Dä¯Åøß¡2iGÈ5§Í?:\rT!ƒwg„óM[7;[v{ÖªCs\rU9d×`ØÈyh\0h@ØÈ~ŸqT4Ì×_QVÍvÃø•F5ÔPƒs*ÄMc]Ió9Ú1T0m†V)S•ÓXÖ[üâÍ*Œ¨c“dA+Œ1hóbõ:×IhõM@İs>P¬ÛÍŞ9ûvuTË>¥‚Ö½`	O5ÙccÛÍöjÏ?QëTmq\$¼¹—=(VÏ6F\rTr¶®~¥šÃ\0Ø|m•CÚ)[Õ‚N¨ÖÆ,dĞ+;µQm™-Å‡ğê\$µo²B-sšÚÇRˆ­ÕàN›:’È/8‰>øb.°Û40>‡ÆÚñ,‹.tÚºJ¶\rÛ\rk®•6Û	WMmØ3[Ñx5œËêqÕÉÑìLb´6Í;`•Lm‹ÿ4•Iµ6^d!5`7¤:aOÕh4õµÀĞ-3üÒHÈUm˜€¶Ú’³^_ÀÔNTê±²[PHğÙØa=UH\rE µ\rjM¶•”SåPsN6ºMXQ 5Œæ	Ã\r’Û­YKqsş[¾s-\0Öé®ï]¼aN³d5?ó+—Cf¼ÍÀRe^ø+@Ø[ÓP€5­ËĞGa‹öôÒµoM@w\0QyoKõUÛøe}¼Õ[¶_oK’@Ûán»wxVıpEºäùPuo5öR“ñ8c·.¥	Uo5Áw\0ò\n(%ÓNp¤ëVÖ®ˆJàˆ AqtÏ×Zæ#Õˆ³òÜk6””ÜiEÜØV‹R{qü×fØ{3l@äPqH‹r!VS]úÈ6¥Ú'q«Ğ@>R=E\0ùêSñ+UjõÊ”øYÓ[ÅºuUÕ¸Õ»rÌÜÇp»6Öõs]h'tË	mJ ¬8ñQUUuD’­m2z›Ğ„àˆB¡K”ßÜİv'P¿l]AAfËchÈ\"RåV«p´ÓXÌü;UË5öÜÆåÒcƒÖ°zPTuUQYëõíZ¯5åU¹…ıJen5ÀÜnŞÕovÅs=Hu½ÙÅZõoa‚itİoUÀÚ»uuH5nİ=jSĞÀUPZMNÄàˆÿQmobF·A>´]i\\¨G\rTŸvÏÖ‚Ôâ\"•Ä2Ø×v4Î³=]¶2åz\n=:¢\rh*s¯×fÅÓw_ÔäÊUt8Å[İ„8]Ÿ+=•ĞëGÕ×7z=n…Û—Jİòßuè8|«Å4u]ô	caÈİzà×€YwíÊt]ÜªÔÕáÅä^€ˆÎrÌŞ)w­]Œ%‚i,˜¦õí¤e}w—0<Õ3ÕäµnÛLr½å.³İiy-Ş7(K&‡\r_;f‰[­Ìˆ\\\rXÃ+Hï…çÔøa=Ü³bŞnôc€	,c’!£Õ8\$m“VõvRæJ]g -†W¹OsˆôƒR( êŞ5]WHVC\\5@Dİ!s%Î’²^×sdñ%NĞŞ9úÈ7·Öƒ{U™¡+ÜÙI-îÕ¼€ïP\0\"FĞˆS5…ÒFŞÏ[Òâµz¶Åsk(7ÄEz•Ÿ÷ÇÖ1-å@İxñÌ¹Ú>M³g‡ïWM£âjÔ»n\nÈ ƒ^«tLµ·ÓUc}AÃVRÜúõ™@;ÕX-<sÔ<×t…¹C8^!P}Ì3q´d·\\Î¶LÄ3uÀÖúÛû\\-\rSlX{sàLÅNlÙåïL™ßŸnà‹¶&ZÅpút6_[\r±¢°¬ƒVÅV÷è„C~ÈIªE…?W%üUöÜ«u…[ÓATAW\rü÷•¦\rdáwøßÅV½Ûkİù¶şÏh,8£ÅŠÏ”Üí×D×ÈØ»¦Ë­|añ¸6-_1O×Ã`j…ıo?7>\nÀXsôY‘nã^cÑÙ{jÈ7®ÚÄÚÊ:ÈÜ]E\"JVJe~×.ÙQHgT3r…cÆÙVßBceø“3e^Õ€…9®8¤\nò ™Zğ(ää‡ª½	;tæzôãÕ#	üq#à\0V.\nÂS/DkË/Èk4 Ÿ‰Ìø(iJÊ`¼†êuM5´l£GÀ–'¢Ò\0n`¼‹54èÁ\rÃ5 «t“B¡}´ŞÒZH€4iƒ:x4µÓŠæ5¡ö¡æ3àæö&ú`Ä¡£úamnÍ-³ön\r©èWƒ†¤a§ØĞËMXC´õ„KQm4ìÔşÈˆ™5…AXGˆîÕ@'€€ï…ºŸÀ:L¶Ô Y 3»\"˜@W÷ƒ²¨Æ»,Õ°ïMà¼õQØ[apfJÂ;…îø`ÕÁ†ÈØc=RŞ°ËÀ¶~ÙV¸o¸—†éŸ¢wócXn‘Ñ‡8K8t·j×â'øt5Ôèe¯B°:øãkx®yaîà£¾­ı‡›¤Íğ·Fn×	”îî |:a09¶\$ècuöfâ\nï‹‹˜‰ºˆw>\"ÏËaˆÆ!8~Zğ\\ƒÀx‡ºM‡¨#ØŒ·‹JÖ\$À×y‰HhMØQ‰H \$ù\0ó‰ƒ]ÀÓó‰`@3bS‡Ö#®×Ñ<KXïLµ…~Xf5S…¸«˜haw†˜åØjÔ6ş–§€^Ú“šß¼˜Õ³r€#€ªÎÖj\0%\0º¤%q;)9„ãg‰.Æ,bBD®£DÔ€~íË:rX3¾¯\nvßÅL­ü5Ü0 R•ìê¥Â/Í²NĞn_¹–ƒ‚!…)SPÒØ¡%ş0†=»ö+Š@BÖ9ùof`œö~)=§DŠp°@L>¼wĞˆ‚¬?L§2YIÌ>»ø!Ì?,šƒì@€÷Ğ[ØÔG¤>¼˜ğÃÌ>÷,ROsÅ*dRğ’cG¼Q¬ÜÅG!ğĞÃ¹œs°èÃq|øåAóìXqæ£ÔøPP%Éñ\\Px×Ã¿TI8ÖÅ¶Î¤s#ç£µ#„ Åˆ #ÄÏL<p_Å¹Ûà¼Ãû>¯lEÿ;Cøô¾ó;øôÈ#£İQ}H_LY˜­Jy\$ÒKL/~=1Jãñ(ıÿäÀ¯ÎÇÁœ0d/\$ÙAe)lüÅËE‚­/ÔmÏ¡É54)QÅ€—ìt±÷GdqQÅÇÔQ1E£„p0ùãÕ	ôd13Áñt¹!CÇæ?™\$Ãñ^>QÌÁñ|¹!B?F9!cÿ„ '€WhAñLYÑÃä…pû1—Áñ–K±\\¬”y*ä½&ÆM£éA{Ôğ~d=“Óà/ƒÃ“äpdå“tPRjÂæEAäí‘\\(Y:Ã\n,yP@iDy)9B\r´!Ód‡f=ÙLÄ4p d >>p™d©•V˜ıÂ•	–KpïÂe&PhBe“&Ap™dÑ'D&Y6es“U:Bd?îO†å5\rŒ'Ke•FD™de•FE¢Cõ\0t(ï—´“|)-Çó#”)ğ!Èm\nÜŠğl4?[âÒ›I\rL^r5cU1™ÒÂı\r,Rr?ãdRØãÍÜsÃş£7&^É!ÅõÔO1ğF°ÿÖ[Ñ-Æı,\0ù)ø\n°Æ¤BÃéäÓ”}¬ß?‹”^a¹æ!ó9pe?•»ùêf1n)ôNÎ†û³¢a¯~í¦ÓWËË}†eSèŒø>Ëø¢¼ÒJOÆæBµ\nÁ¡Pœë%\nÔ*AIleq™EØŒä^Ñ}€QD2p	G•ÄfmJ”Ğü¤íÊ\$Ë}Ò¹+’³-”ó5Eôg\0QTF6ÆYì	#òcé*ìÊƒçK4@[s‡Î8L¼ÖaN)CX•DÆ[ImRò\0006N9fƒz3‘ÎM=å~Ÿå9`%sgÏİ=>¶‚ÏG9Œæ—ï¶¤T´ê²ƒ4ˆZø„Ïtlà†ç‚³86!‚_KthIÁÊÇvìĞ<LìC¢7I/!6t“bQû.²êÔŠMÍfÚózOF\\Î2¶gj\$²ò	‡OşçU@Wº54Ğ™Ğ\$öv´‹P3-Æ,\\Q;½áPÍ•4½·ºÚNGH72ÈTèè—Ïù6iSjg#üİÌ¹T2ãùŒ@9Ù7@l3ã˜p\n€\r#<O—7\0øNu;¬ı”.„¬Ş|õ“agóq††Wç”¤ùrÔO—=Ê©ö\$¼„ùy—Lßb(×Ææ]:…Iè(nqó³ÏËI`‹Õ„ÖàÉ†ÕÒu@%!Àœ5;ÀÃÇ3èK¡İ`Ü›C,œä¯dVq X\0003Nù€>ÓOo3x»S„ÌÆ#³ÓĞ1†õ(©XIeVòÉÒx%UTº#q¢Np ‚Ò#\$­Œ®L)×f|Cİ3´»Ë¹Mäßb¿MGÍ%d4½—L»]KÁ³±èÛmÍwš6Şfé…˜è£ 8\rvÜËu9ÀrÓÔA¡x‹á\0h^‰´:bdghE4¤R™}Ğx˜ßAHÙ|ºEİ¤9¡|ZIVs¤N’ºCÏ—.Ö‘Ö¢çnw<õZNÑDC.Ìèªò¶Ñ'IEµF=Q3?rÈ+K[Tô®—FÔÍ4\r)“@Ñpx—OÑx3à4ÍÌ—â<ÓÚ`˜qD…ò…0ÙÇ¥…óÍåè[A€PõÕiœ”‡úcXÛIšÏZé›EØdéœí¶4YQY§ô\\éÉE¥®óQEÕviK\0B\0WÚİˆOZ?fOkEÇÙ’ïB^dÖ·éöâèLó1M„Æ5¦xÔÿ¨,+WgStØO\"Lı¨6 SH=C¬æ¹æ54ms:¹”eRô4›[‚&£¡¨£”:İšé½jûİ#mºÓûÙ‘tÕ–6©•©lÕjbX5Š.KÕYb…Igje©ÈLú	)j–§\n_VÆ¦öªjwLÜZ¢j•©.§N™qT¼èn:ÉCIx@4Ô—ctÚ¬IªİRîÍ.1~«:°^wö¬c+j¾s½€óêÓ«.­—òƒù«~­vÓºg«–ªoJjŞÔí´»©,î¤Æ/!dî­qêÿ¬%È\$Zb\rv°†·cOV% Œé×¬EJ!g5Ü(ş°õKÎëB£yôk)«R:Ìê˜ÆŸZÊa9~oÍŠênµ\0¨ëTØŞµ‰+ë\\Ä\0000¹›Ü‹‰Ô=ƒ_¢Şª€¬…hmÔs—ç˜e½ÚİjKzĞ»oX`­DÕÚ¯T®¹€•¹UîºKş-g€<N;f¶ÚíU\r5~:îiõ®ö£¶ÆQA¶yšòUCĞrš’ëÕQLëZî6<mµ·*ç™qíDë‡|û Zık¬ôg\"ñË­«kÑZ¦ëı=0IÕçëøêÀæM^ŸT½åZåë¬1¥Òº’™Ğ^ÑU8l,&Ã‘İå}P6:’Ë«:vÃºIÑfÄ{·?°õí%ÌlCfÅWc<ß`vÄõKìc°È5{Ş«°ŞÄµ9lh|jïtä>MNRîôæ=Œæ(´èŠøZôD…=SÛø°lœ,95M¹7/qÆÉ˜°ÔUAÛCèS²ÎÊa…^ne~Ì\0º—³²ÕámÍ)³(%€¬…¢ÖP!÷3ìÕJFÊ;&ìÍ²–ÌÅA[¸‘Ksñlë³FÍÒö1Ë§ÜËV2§8ÖÍ”5é´p!!lü	VÏ\0–m\"1øI–\rí±&ÎÛIm3´¥ø5*‡|Ûågš.Zü¬N´tˆ6œ2å€³qMZ¦®c£ô]\rt-‘k ÄåZà/A¶Ô{YèpåíåWÉĞ›sÃ” _tÚ†vºàC´Úi;Eìã«vÑÛIí’.Ñ„Õm¶QŠğ¶‚ŒYÜ™3#O…”ËGíšâ°mÀaÀZ1úáFƒUJş±t!s\\‡¨M‚ÍÏsÜ´\r‹Ú«·£1H¸]=,²ÍIt×5(ˆ5İèx«X5o\\ğ€–“Y°ö‹—§ˆĞVmARuøY•Vszˆ\";…Ò¿?;*PZ­,úLßA3X•U^§!OÙRÈ‘eµ&å4Œ].qáe:MÕiºf…	5cÃ3Ö–²ë}7t.·­ÓvŸÏhŒë9Ş‘°%¥Aå€;Œéè:úõ³7z„òôh™díÕW%S]h‹¢Ğ©{“É÷öâ×·Dùá;Ù¥·e³ ã]i¼î;µg&µV›¸]«»YOâ¹õ,>ä äĞıõök€Æ2åÊàÛ‚\"±-R@2à%şğ€úo\rTRS1è_¼eÄ!C£_¼EÖ–UÉ‹µåuà\\ÙyS¢/Ë¼ê WÒNmJø!·¨€ğ@–ÙĞ­P\r`9M¨ss#|X½önÎµ½ÅïA¡ùw^õtıîÇtìÜZ?=´ÓÌ×èı§¬ş_eB•×\rèÏû`Î}óP]ŞPe:›èXÕºØI–UNËë6é‚CSíóòØÎÑRéoúMÛ­%Û–õ`À¡PŞs>@CÁ!]EUj•ÔüNíûƒl*B…{\nˆSYÅ‰ÔúƒuOP&¤ÄÔ¿ÈDU\0^e\\\rõRLıµŞ¶U’¹rV“iõ5»·fóÀ¾í¶~Î=t¬ëU'ëèıŠ<[k=ÏUChø.İ|üà2ïURkËÍI•CpG°é‚£!@ –Û<ƒ@õŠ¼Şã·¯µ'İfâ:?J0]T5î7YèeGµI÷¸ì­ÁfØœ*U\rS \rz%ğGuYşU'²ãÃ!¿ÀÕPÕÔğK®ø6œË/ÁM4<pËÂ‹öj3UÍIî\"mÁ?]í7*Ñ¼×|õsÁKA·ı‚FWÜö5üÕÀ·L6Uİ\\è@ÅÅäó@]t]MÛ6ˆ”Â\ro[Úmã®#Œ­BÅ\"+ñ?ª±OÉöoİ€eoXÆMv½Õgƒ\n†­Óö-ºu\0·SÄ\nèT<X_¡O¼Zß ×œ][¹p(¼^ñ…tàUiiyÆ<×`8ñ‚Uúöñ˜àÅÃƒNgFÕÏ2ÜW6{„dÕEÆÔË»Á€êkn|pNMµ<››„¼GÇSqÑ«ßÚXÒrqÌ·6U\nğ#:qñ=8A9Ğ»ÇÈ_Á Y;Çİ@õ½r	nFİ‚ 7MsÉz€î^C¬ˆ<ãÄÿT>\\-xğ\\p£ØÜrqÙCV·31LMÄtÔ«j]·¯àAXöÅ×Ëßy¡NÔ÷“]Õz¥õ|\n]ß²íAS¾Ñ¼UâÙÉÍÛa'_w\$ñ¼EY+»ÍçF6]h%»‹ë‹¸É>Uôí'ÇûõtË]³G*œo—]+'*wñ³¸ğ•\\®„™ÊÕTØòÅ´ì¬€1\0Ïas;KrÕË`\"\0ŒZ“Æşä¼µœÈóW.TÜ‚¥q’ò\0×T!Ç¤Òã*ÚİW€‡]lrr‰Ó‹oÏÌ;*•z]!€uªõ¯O•Ì6Õ®\n`4/se´TDH.èêCW?7E¨é%“î’X9\0_gÈ<U_‘xÅKM¼ab¤AqOxˆ•\\Urá´·5œªĞhÚÍyš­Nµ[&”qV¼Ï|â¶¿¼ìáõ¡ókTğU_•Aw9Üåîi7=º•”Ù­¤©_Vğ6³¥7;;8íNEø&³ep!\n´¦ÒŒù¨¡ˆQ -³ê¡`êá4Ñ¾\r¸8Ö `à-€t\0‰ÅàÆc‘•Ø:l”CñgÁÜî@ÒaB—şüóŒÅ_o@¸H(7Ï_@`‡á*ÒÁ>IÕsäÒÇ>œû`×„ãLM4(ÓnÍ'‹…+Ù­ô&Ó£OøVtZÓÙ	\r>´ê #Odá^¡m:ahÍ)Nd).)¯TôtÔO=Ï;†p®fWt‰…ö`ò€İ;l=)‘Ğ°íu[µ¥|­¶tµÒ°Ã\r”¶%ÒÙ\rˆ¶¡Ò•j½2ë,×J½4Œ0â{bI*t§¬r÷ôÈPpkİ:¸?ÒÛÄ<·åÓ·J|\\tüá“Ó#ô„4[}ô™Ô8‘Øj\\\nëº?»/‹ëZ¡õ\nô×G}ômÒSÔ=E˜çÒx@X¶\0ã_J=K¨zöG\n´hÄWR05yŒÎ´çsÑĞ>=0Ø³¥|“Cì¤ãNGñ~ÂŒæRı]Â•Œ/ÙbÁ—	æPĞ‚å5”†ZÏB•\nĞúqÒ¤¤÷¡-YvÁ¡ì¹|É¢œgøîãÉÖ`€*æüvHOŸD“4‘›ãÛ‘GQEãvboÜäWó¯ÿÀİ×Œ\0±¥¿\0003öQœÀ'_>@÷‹ö~ÀkøO¾¹_#ïõöøï`Ïù¾&<íu¿ì°]È ù¬”¹Æç'†:ÑNEÅäÉH[‘Á¤-‹p+À³şI‘ÏHù“ühÑÆ~ÿD¾ñ¡F½/g1£öwœ&0ö´Ed ÏlÄ÷hİœÇ}„{qìä\0Ñ­FZ“|Ív©ã9ÔÇíœ€ƒêH R4ñÈ–@r	Èl…‘¾#>?\$rñ3À×’61ÌIAê62Â»%ÔlpáÃo\"4\\à>J@Ğü‰ÍÈ¡\"¼ŠqyIëßrD´UšIiwÛòÒI\0\$£CìàÉI%<0‘fIeĞT›2W¿fäZñ~Ç;&BDCéÇÙ†7ÙeÓt5OàÉ£&¨ÑFBÛDñNI®Œãû]~@ìQ,´?)a1,3™ ®a8J˜üh\"3pRs-¶æÀÔNú8æ“RYh\\ËæÖÚé{¦3F·ˆu5¢D!?{åS÷¹Ç\$ƒç19|ãE¿Ì§-¼Ê¹µÍš­\"åÓ´5¡syÙå51ç‰6'y<Ck‹O¨7w]0¼„Í¨îSœ SŞK“9tôyÃ…	ha¤:–MÈ0R¬çnÉ\$Ö¤K;;˜ €ˆ¸GÊ°l&B\nÁ¥Ğ4\$éiE6–à•l²xû\"`·ŒØ\"huUŒõ:5Èí#Şåî÷*İ(€4ğ[7œ•¡,?îå{YŞÙTMs!€Ü…{ÒÅ“P\0,”Üâ)\$~SğßĞî¦äƒcûÀø¬±G4ÌÅYºÊí2s98A¤WÂe~ïü˜õP¦SUÜpÕQ–ÁĞ¿i÷;|­]©Êıë•P9PÁ3S–ªú:eÉı5ïW6‚Œ›#÷}_!tpYX^ûàúÍÇDdı®Hëéâ×4ÔPnŠ\\˜¸ãf¾£>MÔc¿äµ¶°ºÈÙ…¯:—Ñå\$Ó@…ÙÏgO•gùIu£\\wBŒéå•­^±VÃT%jÅ#¸[¸òÉåÕéÂäó¤Ãßæ#q—voÏe;›8uæbI\0–ãq[¼òìÕ>3ôlÏ0ò Á‰\ræÌCJ&ô1„§=Ìü§ÍÏÇD­2\rˆe™5}óãÑ8.İ€ÛÑšÊ^xYÑ¸'€.ô*†CyÆÕ7S˜fœæ \rË)8#Gˆgë%‚V*\0a‰˜Lìf(s˜ \0b¸\$¨Ñz0¸\0€hŸ£À9ú2À`¡øâß¤Ë8\0jŞ’ú2°\0\0ké—¤\0úAéÇ¤`\0oé’Ì€úSê\0\0z}é—§Àz‹ê@ş”úè¿¥¾”zkêBÎ\0\0sê` zWèÀ”\0mêß¤À€n°’z¡èÈ \0nçÏª úmêG£~·úÏé÷­Àzqë\"Îª\0oê7§\0úËé¿®~©zŸég£`€rŸ®Ş¹úFÏ­új—±>Â,Éê·°Âz5èç²>úF·¦-\0Ä°~¿úÁèÏ¤\0ú¯ìğŞ±z…ì®Ü¾Ğ\0aì‡´şËz“í§Ş½û;í—«>Áú¸‚k>Øú¸Ï¥Êú¹éG±¤\0sëß³>–€d¯¨ş¹úÔ‡¶şúÉí§\0ú_ìo« \0kî­³‰záëw¶â{£éo·—úqêw¬ŞÂz›è×´~±{@¢B@1û ‡¬~Û±_ïŸ¨ŞİzÃì¾ÀúËï×£>Şz»êÇ®^õzÇêo©Ş\0síµ¾±z¬™‡®~Ôû­êG­^û«é§½¾‘€gîç´½ü9îÏªŞ½\0sğç©¾¦ü!ì·µ {ûì°\$©¬úqî\0¿\0Ä¨\$¯üIî\0ûğ¦¾Ãû}éh {·êÇ°ş¢zıñ?³_\rzˆ§Á~¢N%ï­Şìz¥ñ'ºß{Œ ŞÆúÇê/À úUêG´·z±òÿ¬ş½üîO±ŞĞ{iğwÍö|›ó/ÉŸ{ïwª”üÛòÍşÙ\0iï§ÉÀûÇé?Àÿ\n\0ièÏ¯¾è|Wèÿ±ûQğw¤+ûAëï¸ÿ?úÅé×Éò{_óÿ§ß ûÛî°^ôú¹êo¯¹üƒìçÎ¿R|#ğ©¡|¥òç§š€iïoÆ?2|\rë'Çš{‹õ°ßzÕô®&{±ñ_CúÂ§¤íËì?Ğ~z™ì7Íœû!î7¥ş•üëXazãîƒ•şùz•óßÅiıƒò×Ãú¸Æ?_ü…ïOÛŞ¼ıEéÒ¾Ò\0gğ²@mz‹î×Ìë|?êOÓß {­ò×§¿5ú÷ö·©>×ü_éàÃzaò_ÄVû_öè^—N%ñÿ´Ãı1íOÕşª}\rôw¥~ûı·õ	¿y}ë?¨>ï{ıõ¿¶_\rüôŸØ{ø‚ÎÃ~!î°\$¿“€gòÇß?ˆüüØÿ™€còÇ®à’şYé Ÿ“ı÷úÆŸ€z¥ñ?zUöoÁ~è|—ğŸÔ_!}ìÿµ@~_é¨>ôş5òçÆ^×{—ôÇ§ß úáîgÒ_b~wùÇ³şĞû—ñçÚ¾²ú‘ì_ë_yzí²k2zîĞÿzÓğO¾ì{Sö®IşYëOÉŸ•\0mø‚Ì£}Ûôš^Ÿ´{êwåÿ&|úğ¿û\rû÷ß~øûæ³‡¶?­û§ùWîßûù?¯ß¨{-é‡¸Ğ}%éOô>õ~gî?§Ÿ=üyòäŸD|™ö_ÇúkıŸØŸ6¬áèïòß¼}Sşğ?\rş‘ê¬_;üiîÇàßt~©êoÌ_8Qü×©_{YûO¬¿u|Qê÷×zëùïá>Àÿş Ÿ~ıúOíÄ|ïñÏÍ¿Ãú‡ş/È_0{Còï¬¿±}qêÿÚE{%ë/ÑşÏ}öñşsÿ÷Ø/qŸI¾©\0jüÕõé×üŸŸ¸½ó|0üõş‹Ùgù/ßb>í{&ùÉïSëG½¯Y²=ç}ªöİ·+ğçË0¾¢z”ş-ì{û7ÌÏ«_¥@\$÷Yÿ‹×7ÜF½=~} ÿ•ï‹Õ÷©¯‘`=¶€<ô‰ğ»Ö'¼ïH‚½YÖıæ\0’q'àoŠ¿Å€øE8“óWå¯äŞÜ\0002€,ÿÕüCÖWŞ`^¦¾:zöşÿkğ÷íKŸ`¾í{j÷5ì³éÏoå¾Ğ~fõQìcòÇª¯–Ÿ¿°~@õ•÷ƒñØOß6½M{Íqñ£óØÏ™_-¿,zšö™ùëùWÅ`?3z¦øEèÓòÇåoµ½’ô|Hû´'¶à@|DúañçÇÌ¯M^Ş=pHô•ësÒ(/síÀr{\0¡óóú·Ç/½Şë@R\rí“í‡§”_>¿'I]ğÛì×¯Ïáß:¿©FùùñàWİğà>e|`úéî„g­O‡ß¬¾yz¸şêSóØ\npŞè@r|öùié·òĞ6Ş°¾´}šõûÿ·¥0ŸjÀH~s}øÑ˜\r¯œ¤Àì{\0!é«á·Õ¯HŸ†>4{¡\0\rüíG¸ÏRŸ¾ƒ|¨õ‘ñ#ÒÏz¿A{~öğûÜ\rïå >ŸzTı]éáøO¶`=À¥|Êõ‘÷#ê—şÏe‘Àó|Põ©ó[Øˆ\"/Á˜¯­Õğ¼èOşŒ=Aù•ñ '­ÌŞ‘?{|àùî{ã—Ç¤ß->|\\öyéCâ7ìïà^@RzaUé3ÔãCàGÁzÒúIò¬·êĞ0À?Û‚dÛ•8“ÓhĞ9@’>÷%èş-ñƒöÕïıwÀ›{öFâ4âP¬¿~!öø×üOø_=Œ‚#åéãÖ¨JŒé|rõª¨)H0ÏVŸË¿w‚—¥ëÛŞØ!O¦ß,¿‹ƒ+¥÷Ò×ğïÿ`Àİ|Àö>ÛÒ‡ïŞêÀ}a)÷¬7²ÏÎà»½êzk\0väh!t4A6.KÒ\nÃÜÇô‹_0=V~Øú¾3ùx\nOÁ {@BŠûUêÄ‡£ïH`åAd€pù•÷—¨Pß À”zñ™ööÇ¨°pŞä=Lz5Yê+æ·ÙÀßí>IzÔı¡ğ“ìá÷ O>‹ ø®	sä'«¯÷^Ğ½ˆ~Nø-î¤w¨Oû^®¾Z€9õïˆ>°>Ÿ9¿ïƒVõ}ó»óª ß–%|bú¥ø;×8AĞFõ¾½}Mæ{Ü8Ğ q@ƒÿÔ¨(ïöß¬¿y°ğÅçÉíš QÑµì#|D÷R”H©!ÃòÔEÖ<ø“3óöˆ»ã#„xƒ!	º'Z)!«ÒFoö\n”I”¡€KA’|µ	 –¤0ğ’‘\\¤JuÔ…º,t<D”˜ù1ÚE†ìí/Ø†F°İ¶ŸR„³	‘*TÃ9İo2\\E\nÁš8MŒk‹ŸÚ@‡	Â4D^Ñ€¤Ğ˜–Á[«5àDœÑG¢ìA&ÇÖ‚\$–i§íÃì‡î©	ôÁ*çÛ÷’\ndh}±t)„whhlBK„¬}qrp\n`QD‘œI¡	UêJ°©ò;®…PĞúâÔW°¬Y¢äc@|.›8MĞÏ¶\"ÿ%B~Ü’’Q¦a-şC‚%šx6SF0ãˆ‚yad¸‚dRÿ°}ƒô,¤ÏÆ¥Jâ¥pã¹ÁZ,ÄCëÂÛG”†ÙÂ˜L.¯á#…\$,:Ø„ré‡Ù>ÿu“	…š5CÜÈ	„!>vÍ~Ê\0Óâ@·˜ø²¤„½É'©¢t†Çºó¢ä\$ŞËH?,0pp£ÀÌC\nG„ËF['è`ÂÁª2×…·Zùá{@aQ½ÃBâÓÀßÈŸ ' á’éfKª\rPøÒ(_¨pá/ ·Ba Ñ`Sá\$!”2Ú†j‚æ\n8\0jÙ‘ƒTXnDÛêVr²ˆØ¡s¦+…Ò‰Å4hQ(¹\0¤,Jà]í-ÀÄ­¯‰C1EÊM\0ªğÎãÁª!hF\0¢ñşWt ·™r¤ï†Z°¨\$!@R{³F†ÂˆáªPHÆQ”¦†9Q+ˆafb¡’\0(eÇ‚ä/ä\$*ÁÔTù\nEùU`Òæ¥^ŠÉºBğ§†BL\0P’Y*8T°«€«C–I<Íš9t”h,¡\"²#hJ…\0‚ôÄ\"ZQN€(C\\{ñ’ô5ğåSC–‡^Æ²óãñPí!OBé®“NŠ:Hx'üQ91Å\$Ç‰!÷À0®»ØãŞCy\nS(U¶¨¤Âî…u\r3/t\\‰8“ #8@¢à\nìÑ€9ÃybHœé›*7]R_3^8ˆ‰à>ò'„g aY~ÂEC`ì\0+»àj‰Ü\rØ8â@£­ÈV`\n\"3D\$pØ€®°	8DD¾*5DGÇÂá…wIQõ°	S“\$ÄFYÄ1ÌˆQ† H‹ÁDx¨ŠÛ²BcÖÉ+®FKÄf[BEL˜\0­“¯OÁÿ@&’…Òƒà?ä*ÈTÂZ¡TD:CŒtùÒ\$ƒgÒâ²J„‡\rš!‹\$xX(âb#!÷†Š“®\"¨}fE¨\0PDÔ\róçÉ…¢*²TˆÊí	:<Ôrè Rv€C„‰ıØ[%æJˆ€¢-Cmˆ‹Å”#´@ú1PB—ˆğÌQq\"Hl„yb7ÃØˆdÊ\$FÄò¢C³@©à˜LÑĞÃÄ\$ŞŠ\\EX’Äœ‡Ş@ı\nÙ’Ò‘‡îv;À=úÈ\0ID9\$lb*ÂT‡;\n~\$l%4‰Oà2‰ˆª˜é2	&@(Ù!D¸ˆn†R!k%ä\$©-\"`²„?;%S&ôÀÑ_BRCš~©ET4.R¡¡‡?bG\"&‘ˆ˜¬ÅéDQd„ÉÂ Ò„›R6 ¦ˆÔ|.'\"¤Q9â6(ˆİB%ã'8™§â¢r\"*ˆ‚6'D(s€\náËDù=÷ lET‘,azŸÃŠÚ&H´¿QP¢ÄU‡Ë‚t3ˆŠ±PB¡ÿ…ø‡t’HÄ&QØöÄŠ6Fd”ÌCdVqas2š3|Â!ó1¨H1aÍÂ§‰_¥	”(3ş1’0ÄLŠUò\"z+x†(Lñ™Ñ#İQñT#‘\"’²ŸˆëpDEèˆŒp¢1\0IˆÉFhª}uıC­,Nè±F™MDsF\0LGh¥ñPZ\"G›î*œUğ‘¡u2š‰’„OZQŸj‰ÇR+\$I¸eQ\$EyH^%AúÈ®‘^¢N¢¶La%W8­¬§âLÅt>¥²+¤JèŸ‘,™³L>‹A‘9¢ˆ¬‘/‘Y²­Š¸Ê~,ä9”=çãP™DÃBOv+¤Lx´Œ¦ƒë¤‚‰™	FÚhšÏbºDÓÑÄü:,¬‘I\"ÅÂA‰»­”üN¸bqÅt‰Ë¬¬F¸¬‘qâ«Â¸Ùj+“4fWñ<âá …„f‹&.¨~ÈÈöbÅË‰õº,œSSP¨âÂ¤ŠÉ\rÖC°˜\\l°â„E½C7­”üPØ®‘CĞ»¡€H#’(£!T›qEÏĞÅ‹Ç¦!¤Rlñ\"m3‰Ìg.)Aô8ÀÑ:áÍB­‹ÁZ0;j3Še%%¦ÇÀÙ†\$oŠãèük4‘PÑ²ÆAM\0ôT˜‹ñb1Â÷cÓJ12(«Ìz¢äÅÎ?ÍB)ÔHÈÅñ\":Ea‰sA‘4G×vÑ‚ĞèEwE¹\n´XD:‘_\0#ÆHA\$~†\$‚Óõq“£%æ\$ñ#è±,Ñ˜ôÅŒc®2ã\"h²Q†E–‰h{ş/k˜´(Gâ]ÅÿdM®/ĞÄ1›ÒYÅ§ŒæÌ2-Tdèµ¤ƒ^Å°C€q¼[HËñ2\$Å·C|%ùï¸L,„PÄÔ‹q^»!À±‡SE¿Œ44ñsc,²&‹˜Z'dU”Ñc73HÙ	J4¼]Hw‘ãLÆ\rˆ‡‚+iFDpş#L²\$Œ.5’“ş±®@«EôBøÉ~|kÄ0!<\"ŠÅûLmhûáy\$¬AşÆÏ#‚60	 	ib ¤ŠAHúl;(ÚÀ\0/¡AH´H˜ÛñdçÆˆz}\rÑ¢„I0ºb– rEÁv7jD¨İ.´cvqŒ¸Pt,Àùà£&¢ìJH€%#t)P	h8€&ƒ>¸Ê†\\+d)JÏ¶P\0 kÜÂ„7ĞiĞb§B”\$åZde3ë‘À£‚B”A¹û¸W¡ôøBÀ?C	z7œn¸W©ÈÍ¢#Õ®6é˜åhå#”Ÿêf˜á/Ê+ÄÃ¯@'ÜcaÖ!ü,?‘>#¡!]iö\$º.\0	ÄxãCÂ…c²18ê0ŒFıuÉlùñ 	ÉAé2WKì—à>¹ùÔñ»ã¯»:F¤)	øçf©~P¡%ö…Å­©ÿh	pÃl¡’4FˆèÜ˜ûÇ@‰Sª\$’(åñŞCé#kø|T0hğñ·£Â1«EÈüÿ°(ïº£ÉGŒ(Ücäp¼b˜¿4f0ôy˜‹hà!ËŠ‘\"S²ó‘èG¨\0²ì†=.hóÑèÙ¾ˆ¼F¢ |.¦=¡õÙ…G²Hopt=rç¼İÓ2…å‚=¤z¸_QéãĞ:Ñ2²>ÈóæoLåÇ·Fh€5/¹&çæ#ì\"	HAÍ}ØûD“\"Â÷Dj-1øÈ^QöR2 NŒ6Í~?dw†1\"PtÃ\0Ò„¶<œˆ©ÑßãüG–BZF?Ê&¹\0ÿ¤!0÷q\\€pÿ!Ğ£{â¾?øÒ4è¼\"Ã)^(W¨H¡ôH\nŠõ'²\08ŞÊÎ\0_BZp>ÀÓé°Ø\$n…ƒ^A\"3Ö;¨¢˜êGòA ÅÚ<kğÊQ.È1F« ö’š2aœ\"A&˜ùòtm#d\$Fê\0šLúz;8òÉ€\$#€¥!1B3Øâ aQ£=-í;³„gˆ¯¡¢ÇJ­!‘Óâ°ÕÕÆî®CzéĞĞ\$GßË	†C©*t`È‘d5£b M	£! ü’Ñ_\0S\r^ä‡èüôÄµC]\\¾ÅjBÜ6Ëò\$cwG–w‹’9j&¯ aO©\$‘4…@REè^áôD´ÅL4,7èÜˆõãŸ{=Ê”?K%±IUãÁ£*G\rPÎâ0Ø{².Y`3	DìBDŠ'hƒNãá¤C—\$„GñøÆh\$cÈZ‡»!ê9Š0VR3Qâ¡ÿ‘¢~6CÔ€©2£uÇ‡0ƒ¦4,MXrG¹ĞÈã\0œ”:ü9ÜÑP\$ÕJH‘/üy§¾dwÇÛ@=‘1N(æ@a@()\n3#ñ[¯yôä\"ÜLsŠGà~˜^älÉ HDÔˆ.<y`\n\0À\"\"ˆeĞ˜†H¤}(‹`Õ	,F¡Ûj¨yh	Ğ¡\"	DåvI<|v([\$\nÃË#~\$÷,;<d˜Ø­E¨‡\\h0zY'ˆ!à²¤@J”u!(_0ëƒôÆİ@°„2\n>(EèÑÏ¨GVD“\"•Äi)6\$y fd~€fC4d:¤ †3›²¼•âJRWHÎF¸A‰À ÀC TŠ–Z@Í%¨Ìq2.(£rF…’‚9”„¢	PQ#G’ºFRbAŒ¥‘?‡Ù¡\"ù!`\nÈŸäÅGiG8‰ü©ï4ÚQÎHCAbLš(òh8¤ÍG–“8M,•4¿HñdÏ%NÜ~YÜœ”ÈÑ.»;@q&°ûs³¹5k3B¤@å%uœƒù6(Ñ\$× ØU%š7²'ˆHgìÏ¤¤	I¬‚6!9ñèL1	ÒŸÈ‘\$ñ&µ\$›95L‰#nÃ²#6{–¹ş£Eääí -'v@Qù²8ä…¢\0Ç:?GN7T@è^òhäHÉ£,•\n;Hcv-@)ŠbfK“5é>@³¤úIö\0É%®Kh¶°0©ú¥jFs)âÓ|P0©U#‹°yxZ§-‚á£CC€ş¼åÜg¼‰/.O:ItFçäÓšCM€]¦ŸP`XÀ3àbŒÏ\0.&llĞÀ3Ò‹ÀÇ46<h¹Ô4¡F(Ì-K+øtˆ¼\$qªàAÌ0\0001€d\0^	í3ÚÄıÃ–7´\0\\ğOÎà+\0000z&o}ÂÈm‚u°2†÷JX6ÂRÛÔYK¦õ¥,†/\nø\0ÖSciÒ˜¾\0006”ÒáÒS3óMò™e0€8”ç)|-¬¦2å5ÊyH’SâÙ©KR•CÑĞ”É)âTR²¡¥5J‚_)Tœ¨Bä)À’€4•%)‚R¬¦‰Q’œ%J=Ğ•/)æR¨ySò¢_òÊ£•üúU4©IP¦å:@V~ñ*¦Ut¨±cÒ¡å>Ê‰~³*¥íÛÉW¢¥TÁ@•*ÎTl©8(¬†•J´•~\n©U’¢Á@•-+.U¬¬ØAÒ¯@’Ên•¡+\nª)Zò°€’Êv•·)‚\n§¹[ò`o€0•RùUü¬YX2˜#ÊÄ”½+DûäyYR°%N>G•Ÿ+ÒS£äySR¾%fJñ•«+S”®9KO‘åoJü•àùW°iXï_¥UË\n•',2WL®ùap%T½d•u,1|±i]Ò±¥IË•ç+ªTä±i^òÈ%:K•÷,’Wì±iZÒÃ¥0K•µ,²SÌ±i`²Ê%xK–,ÒV<	\\ÒÆ\0/Á –#,rYl±IgH%Ë–;2X«ŞYi\$ÖeT½–/,ÂRÔ´écrºå<ËN–‹-Z¬©YU0	åŸËT”µ\0Zœ©ÈòÕå¯/€O,Z4¦òÉå´Êy€O,®YÄ©8òËå¸Ëj•»-nUD³Ç©RÃeºËn{y-v[´)jÙ \0Kx~w.[dµ‰kïo%¸Km—ôn\\4³9qÒáÓKx€­.Z\\§H ’ØeÍ=¯–É.ö¹iq2Ù@/Á—.*\\#Ö©rÒä¥Ô\0_,É->[ì¥©uòç%~Ë¯—?)Ò]|¶‰u²ëåÑÊœ—_.]\$ºùn’äå×Kw–y.¾Y¼¼BÌ’ß%åK•S/.]¤¯	yríåÚËH—-*^¼´É{2ğåİ¾—ø*^ü¹yzğN¥T…|—a/_4½Xòù¥êJğ—Í.ê]\$¾iw²%óKÀ•9/š^áĞ³˜²¯%Få”¹/ö_Ü¦)€>%iÌ8)+ş`1Â‰`2°%ÿJ¥˜qŠ[ÌÀÉró’Ì•_0<ŞÔ¸)]Rÿ¥[Ìw/Z`”Áits%àL—ó0r]d¿©‚Òòf\nÌ—Å0†atµÙÏV¥4Ì3–É0Î_„Ã9„rşŞ˜L5˜y0aäÂ™†rÍÀ€izÒû2lÂ©…Ó&#={zø®_óÚ‡ÓwÌS˜œJb´À§¨Sf?3˜¹0eğÜÅùƒï[¦1\0s{ÿ1•şÌÆ‚^“=Ìl˜e/íõ|ÆÉ†ó&Ìp˜w0òÄÆÉˆ&!Lp˜Y1*`S×éKæAÌs˜ôŠdÇy€ïŸ¦AÌ{™1öd<ÇùÏY&4>Y™+-NdœÈi€ïŠ¦JÌŠ˜örd¬Èé“ó\$&MÌ’—öôrcCÖ¹•3&&SÌš˜õîeLÉé‚XæTÌ¢™g2’e|Êi€R¦4=™{2²eÜÊé‚µf^Ì²˜2ôÖeìËi˜ó.&aÌº˜Y’cCØÉš30&gÌÂ˜2ùfŒÌiƒïÒfhÌÊ™·32f¼Ìã…_&2Ê™Êö¾g<Í`7`I&:°ø‚Ë3a)ÌP\$“7“L˜a3ú´ÎY‚“ 1?x˜ß3¹ëLÏ©OI¥ÃÌš	3jh\$Ï =¼Là™×.Vh3Ö™gs=æ~Ëäš#0Òh¼Ğ7ğ“9^åÍšpRb<ÑÉ¡ÏI«Lå˜¥4Fb¬Ò‰š“8æ-Í(™Û4‚cÒ‰¡b&“Lâ™û1¶h‹è9œ³fœÍ}‰4îhCó¹£ó8ß Í;šFüîi±½§Ü“Dæ\rÌò|i3–d\$Ñ\0óT&—Ìã{·5BjÏ×§C{.g\0Íê	1¾WÜ’İ&®‚šÀöÆkÕ°YY@æA:~E3òjSÜÉªRfuÌ”š#2Zk¼Ò¹Ÿ¯h&rÌœšï5e×y¡M&¾ÍtzÃ50éÌÏ)•SD^•Låz›6:j¬Ï×ºÓc¦¬ÍJzÅ6:j;Øiœ¯fÍÍ™‰4EéÙ¹²³:ŞŸLå™¡4Ff”Ú‰¯SRÃÍ¦›#6²jÍÉµQßÌe”«6ÚgDĞh\nÓ@à+M¯wZhDi´a§úM¸šGZl4©±NA:™şpRkÛiƒ³E\ríA:›|q÷\$İ)¸pN¦zA:›4Bn¤Ûù…óSX|=Z›Ÿ76hÄŞÓ§fÛK¡›u4vo|İ¹uS{æãÍ%	 Æ8˜YGN­#ídp|Ö4ÌcÅèÑqÆ¥AM¬\\_xØQg§ ²Œ½utØÉÀ‘ ¯… >DdŒè¨`\"ùF™œ0%¦pÑñX×H}¢IÆ™f9-‘2CXû‘¦P\0KJy:?L“hÍIVÑ5Æz(¼XxÓ1o#I2ñ‡|´:.8Õ,°cTÅx…\nMôdè n­YcÌœ•¾rTf–DÒY˜ôÎunÈº1	œ²A((¢EÛ\$¡t÷DcXVÉ(!^Â¥‡[\nŞ%%é¿Ğ§b,È/ˆ&)ê)T%±ØûÎtŠª†÷|=Js##Å	G.\\`xŒ¨'ÆÁŠ	&2ÜEXËÌ˜gÅíAñ8QERS0 ÏÙÄ­>İ8€”Ìá¹Äs¥u\$ë@'8ˆ\n²T91gÎ¤#i8­ÄâÙÅñBgUE˜#´Gr%¼ç9Õ‘cõN³?-8Ö(L;xšÑç\\Æ“qópÿ³PDäCÿ¦r\$P“ô³¬§_Åä\$¥š(LP6PNg'NÑœ¡;Fts\$);¨°'XE	’Ìƒâpì.H´‰€ç-Dne	.âØ§Ö!Åt‘9¾/réÎ±]#ÎyŠÈ\\’\\çÙŞ(­fÎ‡ç;îpDà©ßsƒ\"é2šŒ¼ëı\\á(®“¤'Nû&îî+\$áùÓÓ¦§P»‹#:^xœê\0s¨xÈ›÷:–+¤â£ÿÑ]'VÅÙ?:ÒI´ZYÆ‘™\\Ã²=ø…‚uäï¸·Œ®aãNÂcÛ9\n.3!™Ñ=\"ã\0Y‹Ë\"šwÜ^†Xs“gOA¯=/jÆQ3·\"ñ2Ÿ’ÌË:5Û5ô)³‘aŸËfŒ{Ñ2CV‘!Š³«5	Ä3T*0Õ­Èšœ~Š\n5¤7hq1;‰hÃ\$ŞHû.äe0ó	CÔwjŠNJÜ=©+pÊ‘Í¥C¢Š–ò(·Œt¡6Ä†‡ë ZoµyLågÅ·O¢|X¡À5ƒ\$åÉgànõ7´ùdÎ*2º'ğgB™½o¦˜iúÕ#’‚Vê)ù>Y>ÈP'Óïªò#^ı>ø´éÂ’Ó‹˜70m`[P9iiÎë¦~Ÿr0~}ë””¶Á	\\Ã}VX¸íšó5@>@¢’Ó©‰?5K€4)ù©¡gé§âkj¥R~j”ÀNóö[ÚÏÍW”›ø\$ŒırŞSóZ]KŸ®v§{[P‡Ê'§ÙOêiîx‘§³OæÍmJf%š\0ÄáèÌS€À³³ş„¶'†pà ,•K<Õ˜RP´»•À`\\Ô³@]góyR\\8hØ `RŞ'ã7†À™H„çBc(7çf¼­1’¸c\0wMo3ÔsG@‘ä`7zg§FP\"(Š@–mğÃÆÎH§:N3>eK:t%,†(ª´ L—MEâŠAVŸO¿M:qè¸5E‰ƒ“¨%-ŒŸ)@ŠjÚ†SL—…ME>dA“es¬•ø«Ÿ™Azˆ7Dë\nÙ‡µĞ.Jİ\rƒ5ÕlÄK•³\0n Út@\n2¹ğ:Ã?Vš§º ®\"ƒ†5lÉ­³&×S†šê€Q[	}\0Ø³‚Ké>tG0T¾‰ãÃ»Ø:¬\nÈj!YŞ+!Â¶š„° íŠÁ(-mØÁj!\njÍ´(E Ğ©â…!5@JÓé•}6 –Ò…áêT+A&¡bğZ‚èVE6iÎ«KŠ8BècaY(_®'QôÒWÕ	%`”\$£}n\\3Ì£º-4N«Ô¡¦ÆİÂŒô5ÁEPÙá†ˆsJ\"Ü½P*	hÒ‡+?åÂSë”ĞÑUbwfèHÑt'/\\xĞî¡\nrô\riF“T=¨y5¶P­A<J”<²Pæbüd*ÿP¢¯óPöFæ¨¥\re8'PÓÕ+µf¼'È¸¤Ó´D@0Ñ‘DmNê\")©À7Ñ Ê,E7X6\$dUÙî\r¢V&0¹Ú%fæ@¤4×UäP²g)Úa¦i†Ó…¦ÓNdí7a<ˆ(¦·æ‰tJ\",áè¥¯² ¹>dë¸E€:Âæ(¦ÑRPQ S-Å84†³ˆ–OU?Í´û3°x`Gœ=gK¤øPb±ê	À'ğƒ¾xBk8.b4¨FV%U¨ÅXkJœxQ›İÌğÅá\nÇƒ/TãFŒ¥¥šÔaÏ\0m_eF\"‹¢å°!êš‡\rYm1F2RÓp I“şhÄµG¢òÔ(Øz¶Z3 “hÏ¸ém>‹Úhss4dsÑ„Qf¢Âq©\0Nä°Q2ÎÕXñ©5İ âDÕ¡¤5ÑˆàTÔpû‰†k-BŠ\"ÛÚÊœ‚_Ñ¹^n}ùŞ¦¯thİ£qqG8õ S-s§øQÄ¢Á>|+:-¬Ë“âˆ–hU-€x4±IÎ“åÑém×Gâù–€´hğ·ôGÔ‰Ô0ÓåÑôªUËÕÚ>ôÉèB“£ğîôú”¸4.ZM„9[¸Ğ…ôôôI`P:£ñC¼•ÃbÌıœÂİs\nuÌ(V€€º–\n¢Øsú%T‰Ö£P¡'Bâ|Ë3êDæRQ\n ]?”¤şŠ6€aT_OÌ¤xâ¸C90ÍÜÁªQÖ5İI\n,¤TàT’«qC @*5J…åÒMŸ©IT°èI¨‚£y’œê’ğ>ªJ«„i&\n[I1¬Š‘šM\rcÀˆ˜å¤˜jş“y±cŒîy™‡:ã±Nã—BìM*t6ieÏ«\nÓ±ÀàÒyz\nj¦R\"tĞà‰ÂJ/ı; ”h‰>«|Òÿ½f¶\0¼ÃZ‘órÀÔC€ez&k`ŠÒp‡ šÅ\0s.„\$t†\$éSÆ#DM4xCšU‹ğ)WÒ„\0ËJ…§¥*jV€¥\0*§\0\0ÏJ´ ólb€–ù\0¬`Z•¹×£vT°Mø=¡I'€ŠŞD¦¨_„™ZWà·ç³¸PÑô+½ê\n¥2NŒGS\"›€šf\$üj˜ª6ˆV6µÉ5pTŠ>“Ò€3ZóXkÈ");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0!„©ËíMñÌ*)¾oú¯) q•¡eˆµî#ÄòLË\0;";break;case"cross.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0#„©Ëí#\naÖFo~yÃ._wa”á1ç±JîGÂL×6]\0\0;";break;case"up.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMQN\nï}ôa8ŠyšaÅ¶®\0Çò\0;";break;case"down.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMñÌ*)¾[Wş\\¢ÇL&ÙœÆ¶•\0Çò\0;";break;case"arrow.gif":echo"GIF89a\0\n\0€\0\0€€€ÿÿÿ!ù\0\0\0,\0\0\0\0\0\n\0\0‚i–±‹”ªÓ²Ş»\0\0;";break;}}exit;}function
connection(){global$f;return$f;}function
adminer(){global$b;return$b;}function
idf_unescape($t){$Ad=substr($t,-1);return
str_replace($Ad.$Ad,$Ad,substr($t,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
number($X){return
preg_replace('~[^0-9]+~','',$X);}function
remove_slashes($pf,$Ac=false){if(get_magic_quotes_gpc()){while(list($x,$X)=each($pf)){foreach($X
as$rd=>$W){unset($pf[$x][$rd]);if(is_array($W)){$pf[$x][stripslashes($rd)]=$W;$pf[]=&$pf[$x][stripslashes($rd)];}else$pf[$x][stripslashes($rd)]=($Ac?$W:stripslashes($W));}}}}function
bracket_escape($t,$Fa=false){static$Tg=array(':'=>':1',']'=>':2','['=>':3');return
strtr($t,($Fa?array_flip($Tg):$Tg));}function
charset($f){return(version_compare($f->server_info,"5.5.3")>=0?"utf8mb4":"utf8");}function
h($P){return
str_replace("\0","&#0;",htmlspecialchars($P,ENT_QUOTES,'utf-8'));}function
nbsp($P){return(trim($P)!=""?h($P):"&nbsp;");}function
nl_br($P){return
str_replace("\n","<br>",$P);}function
checkbox($D,$Y,$Ua,$yd="",$xe="",$Za=""){$J="<input type='checkbox' name='$D' value='".h($Y)."'".($Ua?" checked":"").($xe?' onclick="'.h($xe).'"':'').">";return($yd!=""||$Za?"<label".($Za?" class='$Za'":"").">$J".h($yd)."</label>":$J);}function
optionlist($Be,$Vf=null,$oh=false){$J="";foreach($Be
as$rd=>$W){$Ce=array($rd=>$W);if(is_array($W)){$J.='<optgroup label="'.h($rd).'">';$Ce=$W;}foreach($Ce
as$x=>$X)$J.='<option'.($oh||is_string($x)?' value="'.h($x).'"':'').(($oh||is_string($x)?(string)$x:$X)===$Vf?' selected':'').'>'.h($X);if(is_array($W))$J.='</optgroup>';}return$J;}function
html_select($D,$Be,$Y="",$we=true){if($we)return"<select name='".h($D)."'".(is_string($we)?' onchange="'.h($we).'"':"").">".optionlist($Be,$Y)."</select>";$J="";foreach($Be
as$x=>$X)$J.="<label><input type='radio' name='".h($D)."' value='".h($x)."'".($x==$Y?" checked":"").">".h($X)."</label>";return$J;}function
select_input($Ba,$Be,$Y="",$bf=""){return($Be?"<select$Ba><option value=''>$bf".optionlist($Be,$Y,true)."</select>":"<input$Ba size='10' value='".h($Y)."' placeholder='$bf'>");}function
confirm(){return" onclick=\"return confirm('".lang(0)."');\"";}function
print_fieldset($s,$Fd,$yh=false,$xe=""){echo"<fieldset><legend><a href='#fieldset-$s' onclick=\"".h($xe)."return !toggle('fieldset-$s');\">$Fd</a></legend><div id='fieldset-$s'".($yh?"":" class='hidden'").">\n";}function
bold($Na,$Za=""){return($Na?" class='active $Za'":($Za?" class='$Za'":""));}function
odd($J=' class="odd"'){static$r=0;if(!$J)$r=-1;return($r++%2?$J:'');}function
js_escape($P){return
addcslashes($P,"\r\n'\\/");}function
json_row($x,$X=null){static$Bc=true;if($Bc)echo"{";if($x!=""){echo($Bc?"":",")."\n\t\"".addcslashes($x,"\r\n\"\\/").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\/").'"':'undefined');$Bc=false;}else{echo"\n}\n";$Bc=true;}}function
ini_bool($dd){$X=ini_get($dd);return(preg_match('~^(on|true|yes)$~i',$X)||(int)$X);}function
sid(){static$J;if($J===null)$J=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$J;}function
set_password($uh,$N,$V,$Xe){$_SESSION["pwds"][$uh][$N][$V]=($_COOKIE["adminer_key"]&&is_string($Xe)?array(encrypt_string($Xe,$_COOKIE["adminer_key"])):$Xe);}function
get_password(){$J=get_session("pwds");if(is_array($J))$J=($_COOKIE["adminer_key"]?decrypt_string($J[0],$_COOKIE["adminer_key"]):false);return$J;}function
q($P){global$f;return$f->quote($P);}function
get_vals($H,$d=0){global$f;$J=array();$I=$f->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[]=$K[$d];}return$J;}function
get_key_vals($H,$g=null,$Jg=0){global$f;if(!is_object($g))$g=$f;$J=array();$g->timeout=$Jg;$I=$g->query($H);$g->timeout=0;if(is_object($I)){while($K=$I->fetch_row())$J[$K[0]]=$K[1];}return$J;}function
get_rows($H,$g=null,$k="<p class='error'>"){global$f;$nb=(is_object($g)?$g:$f);$J=array();$I=$nb->query($H);if(is_object($I)){while($K=$I->fetch_assoc())$J[]=$K;}elseif(!$I&&!is_object($g)&&$k&&defined("PAGE_HEADER"))echo$k.error()."\n";return$J;}function
unique_array($K,$v){foreach($v
as$u){if(preg_match("~PRIMARY|UNIQUE~",$u["type"])){$J=array();foreach($u["columns"]as$x){if(!isset($K[$x]))continue
2;$J[$x]=$K[$x];}return$J;}}}function
escape_key($x){if(preg_match('(^([\w(]+)('.str_replace("_",".*",preg_quote(idf_escape("_"))).')([ \w)]+)$)',$x,$A))return$A[1].idf_escape(idf_unescape($A[2])).$A[3];return
idf_escape($x);}function
where($Z,$m=array()){global$f,$w;$J=array();foreach((array)$Z["where"]as$x=>$X){$x=bracket_escape($x,1);$d=escape_key($x);$J[]=$d.(($w=="sql"&&preg_match('~^[0-9]*\\.[0-9]*$~',$X))||$w=="mssql"?" LIKE ".q(addcslashes($X,"%_\\")):" = ".unconvert_field($m[$x],q($X)));if($w=="sql"&&preg_match('~char|text~',$m[$x]["type"])&&preg_match("~[^ -@]~",$X))$J[]="$d = ".q($X)." COLLATE ".charset($f)."_bin";}foreach((array)$Z["null"]as$x)$J[]=escape_key($x)." IS NULL";return
implode(" AND ",$J);}function
where_check($X,$m=array()){parse_str($X,$Ta);remove_slashes(array(&$Ta));return
where($Ta,$m);}function
where_link($r,$d,$Y,$ye="="){return"&where%5B$r%5D%5Bcol%5D=".urlencode($d)."&where%5B$r%5D%5Bop%5D=".urlencode(($Y!==null?$ye:"IS NULL"))."&where%5B$r%5D%5Bval%5D=".urlencode($Y);}function
convert_fields($e,$m,$M=array()){$J="";foreach($e
as$x=>$X){if($M&&!in_array(idf_escape($x),$M))continue;$za=convert_field($m[$x]);if($za)$J.=", $za AS ".idf_escape($x);}return$J;}function
cookie($D,$Y,$Id=2592000){global$ba;$F=array($D,(preg_match("~\n~",$Y)?"":$Y),($Id?time()+$Id:0),preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$F[]=true;return
call_user_func_array('setcookie',$F);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($x){return$_SESSION[$x][DRIVER][SERVER][$_GET["username"]];}function
set_session($x,$X){$_SESSION[$x][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($uh,$N,$V,$j=null){global$Pb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($Pb))."|username|".($j!==null?"db|":"").session_name()),$A);return"$A[1]?".(sid()?SID."&":"").($uh!="server"||$N!=""?urlencode($uh)."=".urlencode($N)."&":"")."username=".urlencode($V).($j!=""?"&db=".urlencode($j):"").($A[2]?"&$A[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($_,$C=null){if($C!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($_!==null?$_:$_SERVER["REQUEST_URI"]))][]=$C;}if($_!==null){if($_=="")$_=".";header("Location: $_");exit;}}function
query_redirect($H,$_,$C,$yf=true,$oc=true,$wc=false,$Ig=""){global$f,$k,$b;if($oc){$kg=microtime(true);$wc=!$f->query($H);$Ig=format_time($kg);}$ig="";if($H)$ig=$b->messageQuery($H,$Ig);if($wc){$k=error().$ig;return
false;}if($yf)redirect($_,$C.$ig);return
true;}function
queries($H){global$f;static$sf=array();static$kg;if(!$kg)$kg=microtime(true);if($H===null)return
array(implode("\n",$sf),format_time($kg));$sf[]=(preg_match('~;$~',$H)?"DELIMITER ;;\n$H;\nDELIMITER ":$H).";";return$f->query($H);}function
apply_queries($H,$S,$kc='table'){foreach($S
as$Q){if(!queries("$H ".$kc($Q)))return
false;}return
true;}function
queries_redirect($_,$C,$yf){list($sf,$Ig)=queries(null);return
query_redirect($sf,$_,$C,$yf,false,!$yf,$Ig);}function
format_time($kg){return
lang(1,max(0,microtime(true)-$kg));}function
remove_from_uri($Pe=""){return
substr(preg_replace("~(?<=[?&])($Pe".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($E,$wb){return" ".($E==$wb?$E+1:'<a href="'.h(remove_from_uri("page").($E?"&page=$E".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($E+1)."</a>");}function
get_file($x,$Cb=false){$_c=$_FILES[$x];if(!$_c)return
null;foreach($_c
as$x=>$X)$_c[$x]=(array)$X;$J='';foreach($_c["error"]as$x=>$k){if($k)return$k;$D=$_c["name"][$x];$Qg=$_c["tmp_name"][$x];$ob=file_get_contents($Cb&&preg_match('~\\.gz$~',$D)?"compress.zlib://$Qg":$Qg);if($Cb){$kg=substr($ob,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$kg,$Df))$ob=iconv("utf-16","utf-8",$ob);elseif($kg=="\xEF\xBB\xBF")$ob=substr($ob,3);$J.=$ob."\n\n";}else$J.=$ob;}return$J;}function
upload_error($k){$Qd=($k==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($k?lang(2).($Qd?" ".lang(3,$Qd):""):lang(4));}function
repeat_pattern($Ze,$Gd){return
str_repeat("$Ze{0,65535}",$Gd/65535)."$Ze{0,".($Gd%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($P,$Gd=80,$rg=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$Gd).")($)?)u",$P,$A))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$Gd).")($)?)",$P,$A);return
h($A[1]).$rg.(isset($A[2])?"":"<i>...</i>");}function
format_number($X){return
strtr(number_format($X,0,".",lang(5)),preg_split('~~u',lang(6),-1,PREG_SPLIT_NO_EMPTY));}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($pf,$ad=array()){while(list($x,$X)=each($pf)){if(!in_array($x,$ad)){if(is_array($X)){foreach($X
as$rd=>$W)$pf[$x."[$rd]"]=$W;}else
echo'<input type="hidden" name="'.h($x).'" value="'.h($X).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($Q,$xc=false){$J=table_status($Q,$xc);return($J?$J:array("Name"=>$Q));}function
column_foreign_keys($Q){global$b;$J=array();foreach($b->foreignKeys($Q)as$o){foreach($o["source"]as$X)$J[$X][]=$o;}return$J;}function
enum_input($U,$Ba,$l,$Y,$ec=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$B);$J=($ec!==null?"<label><input type='$U'$Ba value='$ec'".((is_array($Y)?in_array($ec,$Y):$Y===0)?" checked":"")."><i>".lang(7)."</i></label>":"");foreach($B[1]as$r=>$X){$X=stripcslashes(str_replace("''","'",$X));$Ua=(is_int($Y)?$Y==$r+1:(is_array($Y)?in_array($r+1,$Y):$Y===$X));$J.=" <label><input type='$U'$Ba value='".($r+1)."'".($Ua?' checked':'').'>'.h($b->editVal($X,$l)).'</label>';}return$J;}function
input($l,$Y,$p){global$f,$ch,$b,$w;$D=h(bracket_escape($l["field"]));echo"<td class='function'>";if(is_array($Y)&&!$p){$ya=array($Y);if(version_compare(PHP_VERSION,5.4)>=0)$ya[]=JSON_PRETTY_PRINT;$Y=call_user_func_array('json_encode',$ya);$p="json";}$Ff=($w=="mssql"&&$l["auto_increment"]);if($Ff&&!$_POST["save"])$p=null;$Lc=(isset($_GET["select"])||$Ff?array("orig"=>lang(8)):array())+$b->editFunctions($l);$Ba=" name='fields[$D]'";if($l["type"]=="enum")echo
nbsp($Lc[""])."<td>".$b->editInput($_GET["edit"],$l,$Ba,$Y);else{$Bc=0;foreach($Lc
as$x=>$X){if($x===""||!$X)break;$Bc++;}$we=($Bc?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($l["field"])))."]']; if ($Bc > f.selectedIndex) f.selectedIndex = $Bc;\" onkeyup='keyupChange.call(this);'":"");$Ba.=$we;$Sc=(in_array($p,$Lc)||isset($Lc[$p]));echo(count($Lc)>1?"<select name='function[$D]' onchange='functionChange(this);'".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).">".optionlist($Lc,$p===null||$Sc?$p:"")."</select>":nbsp(reset($Lc))).'<td>';$fd=$b->editInput($_GET["edit"],$l,$Ba,$Y);if($fd!="")echo$fd;elseif($l["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$B);foreach($B[1]as$r=>$X){$X=stripcslashes(str_replace("''","'",$X));$Ua=(is_int($Y)?($Y>>$r)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$D][$r]' value='".(1<<$r)."'".($Ua?' checked':'')."$we>".h($b->editVal($X,$l)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$l["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$D'$we>";elseif(($Gg=preg_match('~text|lob~',$l["type"]))||preg_match("~\n~",$Y)){if($Gg&&$w!="sqlite")$Ba.=" cols='50' rows='12'";else{$L=min(12,substr_count($Y,"\n")+1);$Ba.=" cols='30' rows='$L'".($L==1?" style='height: 1.2em;'":"");}echo"<textarea$Ba>".h($Y).'</textarea>';}elseif($p=="json")echo"<textarea$Ba cols='50' rows='12' class='jush-js'>".h($Y).'</textarea>';else{$Sd=(!preg_match('~int~',$l["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$l["length"],$A)?((preg_match("~binary~",$l["type"])?2:1)*$A[1]+($A[3]?1:0)+($A[2]&&!$l["unsigned"]?1:0)):($ch[$l["type"]]?$ch[$l["type"]]+($l["unsigned"]?0:1):0));if($w=='sql'&&$f->server_info>=5.6&&preg_match('~time~',$l["type"]))$Sd+=7;echo"<input".((!$Sc||$p==="")&&preg_match('~(?<!o)int~',$l["type"])?" type='number'":"")." value='".h($Y)."'".($Sd?" maxlength='$Sd'":"").(preg_match('~char|binary~',$l["type"])&&$Sd>20?" size='40'":"")."$Ba>";}}}function
process_input($l){global$b;$t=bracket_escape($l["field"]);$p=$_POST["function"][$t];$Y=$_POST["fields"][$t];if($l["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($l["auto_increment"]&&$Y=="")return
null;if($p=="orig")return($l["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($l["field"]):false);if($p=="NULL")return"NULL";if($l["type"]=="set")return
array_sum((array)$Y);if($p=="json"){$p="";$Y=json_decode($Y,true);if(!is_array($Y))return
false;return$Y;}if(preg_match('~blob|bytea|raw|file~',$l["type"])&&ini_bool("file_uploads")){$_c=get_file("fields-$t");if(!is_string($_c))return
false;return
q($_c);}return$b->processInput($l,$Y,$p);}function
fields_from_edit(){global$Ob;$J=array();foreach((array)$_POST["field_keys"]as$x=>$X){if($X!=""){$X=bracket_escape($X);$_POST["function"][$X]=$_POST["field_funs"][$x];$_POST["fields"][$X]=$_POST["field_vals"][$x];}}foreach((array)$_POST["fields"]as$x=>$X){$D=bracket_escape($x,1);$J[$D]=array("field"=>$D,"privileges"=>array("insert"=>1,"update"=>1),"null"=>1,"auto_increment"=>($x==$Ob->primary),);}return$J;}function
search_tables(){global$b,$f;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Hc=false;foreach(table_status('',true)as$Q=>$R){$D=$b->tableName($R);if(isset($R["Engine"])&&$D!=""&&(!$_POST["tables"]||in_array($Q,$_POST["tables"]))){$I=$f->query("SELECT".limit("1 FROM ".table($Q)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($Q),array())),1));if(!$I||$I->fetch_row()){if(!$Hc){echo"<ul>\n";$Hc=true;}echo"<li>".($I?"<a href='".h(ME."select=".urlencode($Q)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$D</a>\n":"$D: <span class='error'>".error()."</span>\n");}}}echo($Hc?"</ul>":"<p class='message'>".lang(9))."\n";}function
dump_headers($Yc,$be=false){global$b;$J=$b->dumpHeaders($Yc,$be);$Ne=$_POST["output"];if($Ne!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($Yc).".$J".($Ne!="file"&&!preg_match('~[^0-9a-z]~',$Ne)?".$Ne":""));session_write_close();ob_flush();flush();return$J;}function
dump_csv($K){foreach($K
as$x=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$K[$x]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$K)."\r\n";}function
apply_sql_function($p,$d){return($p?($p=="unixepoch"?"DATETIME($d, '$p')":($p=="count distinct"?"COUNT(DISTINCT ":strtoupper("$p("))."$d)"):$d);}function
get_temp_dir(){$J=ini_get("upload_tmp_dir");if(!$J){if(function_exists('sys_get_temp_dir'))$J=sys_get_temp_dir();else{$n=@tempnam("","");if(!$n)return
false;$J=dirname($n);unlink($n);}}return$J;}function
password_file($h){$n=get_temp_dir()."/adminer.key";$J=@file_get_contents($n);if($J||!$h)return$J;$Jc=@fopen($n,"w");if($Jc){chmod($n,0660);$J=rand_string();fwrite($Jc,$J);fclose($Jc);}return$J;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($X,$z,$l,$Hg){global$b,$ba;if(is_array($X)){$J="";foreach($X
as$rd=>$W)$J.="<tr>".($X!=array_values($X)?"<th>".h($rd):"")."<td>".select_value($W,$z,$l,$Hg);return"<table cellspacing='0'>$J</table>";}if(!$z)$z=$b->selectLink($X,$l);if($z===null){if(is_mail($X))$z="mailto:$X";if($rf=is_url($X))$z=(($rf=="http"&&$ba)||preg_match('~WebKit~i',$_SERVER["HTTP_USER_AGENT"])?$X:"https://www.adminer.org/redirect/?url=".urlencode($X));}$J=$b->editVal($X,$l);if($J!==null){if($J==="")$J="&nbsp;";elseif(!is_utf8($J))$J="\0";elseif($Hg!=""&&is_shortable($l))$J=shorten_utf8($J,max(0,+$Hg));else$J=h($J);}return$b->selectVal($J,$z,$l,$X);}function
is_mail($bc){$_a='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Nb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$Ze="$_a+(\\.$_a+)*@($Nb?\\.)+$Nb";return
is_string($bc)&&preg_match("(^$Ze(,\\s*$Ze)*\$)i",$bc);}function
is_url($P){$Nb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Nb?\\.)+$Nb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$P,$A)?strtolower($A[1]):"");}function
is_shortable($l){return
preg_match('~char|text|lob|geometry|point|linestring|polygon|string~',$l["type"]);}function
count_rows($Q,$Z,$ld,$q){global$w;$H=" FROM ".table($Q).($Z?" WHERE ".implode(" AND ",$Z):"");return($ld&&($w=="sql"||count($q)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$q).")$H":"SELECT COUNT(*)".($ld?" FROM (SELECT 1$H$Oc) x":$H));}function
slow_query($H){global$b,$T;$j=$b->database();$Jg=$b->queryTimeout();if(support("kill")&&is_object($g=connect())&&($j==""||$g->select_db($j))){$wd=$g->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$T,'&kill=',$wd,'\');
}, ',1000*$Jg,');
</script>
';}else$g=null;ob_flush();flush();$J=@get_key_vals($H,$g,$Jg);if($g){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($J);}function
get_token(){$vf=rand(1,1e6);return($vf^$_SESSION["token"]).":$vf";}function
verify_token(){list($T,$vf)=explode(":",$_POST["token"]);return($vf^$_SESSION["token"])==$T;}function
lzw_decompress($Ja){$Jb=256;$Ka=8;$bb=array();$Gf=0;$Hf=0;for($r=0;$r<strlen($Ja);$r++){$Gf=($Gf<<8)+ord($Ja[$r]);$Hf+=8;if($Hf>=$Ka){$Hf-=$Ka;$bb[]=$Gf>>$Hf;$Gf&=(1<<$Hf)-1;$Jb++;if($Jb>>$Ka)$Ka++;}}$Ib=range("\0","\xFF");$J="";foreach($bb
as$r=>$ab){$ac=$Ib[$ab];if(!isset($ac))$ac=$Bh.$Bh[0];$J.=$ac;if($r)$Ib[]=$Bh.$ac[0];$Bh=$ac;}return$J;}function
on_help($hb,$dg=0){return" onmouseover='helpMouseover(this, event, ".h($hb).", $dg);' onmouseout='helpMouseout(this, event);'";}function
edit_form($a,$m,$K,$kh){global$b,$w,$T,$k;$wg=$b->tableName(table_status1($a,true));page_header(($kh?lang(10):lang(11)),$k,array("select"=>array($a,$wg)),$wg);if($K===false)echo"<p class='error'>".lang(12)."\n";echo'<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$m)echo"<p class='error'>".lang(13)."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($m
as$D=>$l){echo"<tr><th>".$b->fieldName($l);$Db=$_GET["set"][bracket_escape($D)];if($Db===null){$Db=$l["default"];if($l["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$Db,$Df))$Db=$Df[1];}$Y=($K!==null?($K[$D]!=""&&$w=="sql"&&preg_match("~enum|set~",$l["type"])?(is_array($K[$D])?array_sum($K[$D]):+$K[$D]):$K[$D]):(!$kh&&$l["auto_increment"]?"":(isset($_GET["select"])?false:$Db)));if(!$_POST["save"]&&is_string($Y))$Y=$b->editVal($Y,$l);$p=($_POST["save"]?(string)$_POST["function"][$D]:($kh&&$l["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(preg_match("~time~",$l["type"])&&$Y=="CURRENT_TIMESTAMP"){$Y="";$p="now";}input($l,$Y,$p);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]' onkeyup='keyupChange.call(this);' onchange='fieldChange(this);' value=''>"."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array("null"=>isset($_GET["select"]))))."<td><input name='field_vals[]'>"."\n";echo"</table>\n";}echo"<p>\n";if($m){echo"<input type='submit' value='".lang(14)."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($kh?lang(15)."' onclick='return !ajaxForm(this.form, \"".lang(16).'...", this)':lang(17))."' title='Ctrl+Shift+Enter'>\n";}echo($kh?"<input type='submit' name='delete' value='".lang(18)."'".confirm().">\n":($_POST||!$m?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$T,'">
</form>
';}global$b,$f,$Pb,$Xb,$hc,$k,$Lc,$Pc,$ba,$ed,$w,$ca,$_d,$ve,$af,$og,$Tc,$T,$Vg,$ch,$jh,$ia;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$ba=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);session_cache_limiter("");if(!defined("SID")){session_name("adminer_sid");$F=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$F[]=true;call_user_func_array('session_set_cookie_params',$F);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Ac);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$_d=array('zh'=>'ç®€ä½“ä¸­æ–‡','en'=>'English','zh-tw'=>'ç¹é«”ä¸­æ–‡',);function
get_lang(){global$ca;return$ca;}function
lang($t,$le=null){if(is_string($t)){$df=array_search($t,get_translations("en"));if($df!==false)$t=$df;}global$ca,$Vg;$Ug=($Vg[$t]?$Vg[$t]:$t);if(is_array($Ug)){$df=($le==1?0:($ca=='cs'||$ca=='sk'?($le&&$le<5?1:2):($ca=='fr'?(!$le?0:1):($ca=='pl'?($le%10>1&&$le%10<5&&$le/10%10!=1?1:2):($ca=='sl'?($le%100==1?0:($le%100==2?1:($le%100==3||$le%100==4?2:3))):($ca=='lt'?($le%10==1&&$le%100!=11?0:($le%10>1&&$le/10%10!=1?1:2)):($ca=='bs'||$ca=='ru'||$ca=='sr'||$ca=='uk'?($le%10==1&&$le%100!=11?0:($le%10>1&&$le%10<5&&$le/10%10!=1?1:2)):1)))))));$Ug=$Ug[$df];}$ya=func_get_args();array_shift($ya);$Gc=str_replace("%d","%s",$Ug);if($Gc!=$Ug)$ya[0]=format_number($le);return
vsprintf($Gc,$ya);}function
switch_lang(){global$ca,$_d;echo"<form action='' method='post'>\n<div id='lang'>",lang(19).": ".html_select("lang",$_d,$ca,"this.form.submit();")," <input type='submit' value='".lang(20)."' class='hidden'>\n","<input type='hidden' name='token' value='".get_token()."'>\n";echo"</div>\n</form>\n";}if(isset($_POST["lang"])&&verify_token()){cookie("adminer_lang",$_POST["lang"]);$_SESSION["lang"]=$_POST["lang"];$_SESSION["translations"]=array();redirect(remove_from_uri());}$ca="en";if(isset($_d[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$ca=$_COOKIE["adminer_lang"];}elseif(isset($_d[$_SESSION["lang"]]))$ca=$_SESSION["lang"];else{$oa=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$B,PREG_SET_ORDER);foreach($B
as$A)$oa[$A[1]]=(isset($A[3])?$A[3]:1);arsort($oa);foreach($oa
as$x=>$G){if(isset($_d[$x])){$ca=$x;break;}$x=preg_replace('~-.*~','',$x);if(!isset($oa[$x])&&isset($_d[$x])){$ca=$x;break;}}}$Vg=&$_SESSION["translations"];if($_SESSION["translations_version"]!=-387214307){$Vg=array();$_SESSION["translations_version"]=-387214307;}function
get_translations($zd){switch($zd){case"zh":$lb="ä^¨ês•\\šr¤îõâ|%ÌÂ:\$\nr.®„ö2Šr/d²È»[8Ğ S™8€r©!T¡\\¸s¦’I4¢b§r¬ñ•Ğ€Js!Kd²u´eåV¦©ÅDªX,#!˜Ğj6 §:¥t\nr£“îU:.Z²PË‘.…\rVWd^%äŒµ’r¡T²Ô¼*°s#UÕ`QdŞu'c(€ÜoF“±¤Øe3™Nb¦`êp2N™S¡ Ó£:LYñta~¨&6ÛŠ‹•r¶s®Ôükó{¾”òf“qŸw¹ß-œ×ü\n–2‹Œ #*«B!@éL©N…zµĞ¨@F«÷:QQãW­àÏs¡~™r.“ndJ¥ÊX’¨ËŠ;.ÚM(ìbx¦¥¹dè*S¨ì!J—ç1.[\$¹h´¤¹ÎVÈÉdî’ë£Şü‘±6r‘²ĞC”*r“eñÊ^”K!f]¸(r\\§‘E	ÊL½ïiPsºF­ys”\nZÃ±()tI¬„Éw’­ÙÌF'<½0BHÚ83ãhÊ7Š3G75£xÈÒ4Ã›*)Š\"`ÒÕ¶§I\0DœÄYRsKRZLÇ9H]8\$™ÌO±\\s…ÉĞSÑÁ}KSÒê¥)v]QEÎğ¡ĞE%”	CFeíR\$İ:H	i Nå¤z“—g1¡—¤iÎ^•ÉiÀD}pL©ö‹ÆFqÄ>%ÅaÍFQÅÓÀHF‘ÊE8Ã¨Ø64“>cÂ7Sà˜r’(ñvñ9Us•)DO\$=¤şg)xôœ»sPS5L²rËx¡rs1yiF}OcØ]-RE1tÒ±ÌNw¢^:¹™ÊC¬ù\rL]ER½U”%¸îiVT)R\rƒ äÆ±á\0Â92£xÌ3\r`ÊÚœÅ™Pt’H¨7³mî<„¨Ü9£ÆÑc5Ü\rƒxÎæacH9lƒÎ0¹ûVk˜:µa@æë-D¦)ÁNRäI«a\$jIR‘äš®§)JÁZÖ¸@I—!O±‚Ø4ãpA–O±!‘kãÌós4¾^ô‹¸š0mXäÌøƒ˜î7S¸Ê<N 2Á\0x0²:€Ì„C@è:˜t…ã¿Ì#'7£]æá|ßù\r^ÏØ\rÁxExMè÷ù³^á¬äÔ›*nN\0ğ†|œœeN©ÜÒ¸ÂÌª3/µ±>Äàm]psoáÙ‹ñ\n:E»ˆU‘^’Qp.Gğÿ Ş\\Dâ„‚½1¦Rt€H\n\0‚ôn#áyî!‚ £Á‚œP•ÜV¥“:°…vÄ¸˜#MI¹9ˆPs\nájªXH*Ç‘'0uÎ(‘Œ	\$L<´ĞÈS¹—N)è7AC\\hÚ€q¦‰8†`äÃh /©«<sZ›Á\0cn)èÒG÷hM©1`báÃğ Â˜TˆŒœ«3qPD‹1I0½\nÁ„ôo‚¤B¬¥˜¿ğ¤1†8È/gdiÛ‹éiÀ€1ÎĞ ÆxÊ™×°‚¤C^éÜ4¦·˜œ`Ô†‘Ñö™GÜZ –k‹4s\nŒ+ÅÈ\n	á8P T³ªv@Š,òD^2‹TZx‚U3üs‹¾'‹pé¢ıŒ\nep áDé”3ÜœC°a\r’–ºa\"ˆÀ¸;à@AtÌ‚¤\"(Š‹ºB\"éidâìğ\$4a„Dªe1Ú#¾xiÓf1¢¨j‚ÆYÓ#Æ!“Ô#Æ/ÄØç-\"•F9Dx˜%E!\0•Š94äN\nÄEàŒrG­%D¡PrK®üJ¤¤˜-ë8s;¢İÍ’ÙÌ9gAãTaL4‡ Ê‚ˆÃºã>ÍXd;´üñ‘:'šÈ•d+©Å=`}U,‹	‡&\"¥ÔÊÁV”–‹¡ YÚ—Ñn—ÄP &3ˆJ,Õ6)ªÀ‘Hö„D2&x)î¸e M‹¢&‡H“Ã˜G2öÃYÅ~fŒ}	\n¥U±ù;¡Ÿ%“»q«²MSÄ*†‚}¡¤Ñ4æ eƒ|{4áÂk†W¨KDø¥<–­œ5Á2CÓ¸/ Rl€…x¢?‚“jN+Ä«¹pTG‰tv,G(“°Æ™päáX«Ât˜Æ8^\\pv¥s¡‘…—.ø¯€¤üà“Œ‡õé’‚>HEJ'¥4\\EŠG;-†ìNà&×:FI\0(+†PÅ–-ÃÈ¢Ú¹a!I³3\\BPL¡¡l9DœÂµa‹±\n·ÔjÀÇW–§Dz'Ââğ^‹ákbĞ ê}Mhˆç¶4ña6-Ş‘ÒeßC¦…r	Óš8ïSTU¥•§T:ŸQ ûŠÎõa,ESşÒa&#•À»ØRQ\0/êŠBƒZ°G.ÃÙZkòĞƒµU©´‚ñà’ËUih--ÕV%Ğª.…4N-Ae\nqa³õu”¨õV¹™p“÷^¨©*¢¦¥½Q´XŞõİ„³yî½Ñ£êBcûËW²>µnø³|»` ÒUİ»ì`GâÄ\"UiÃxçáüCˆõo\0×³†qïqjÍ»ä¼‡‚ÜîIoPU®ª£”IÍ%l„?3„Ğ¡/ˆZùt¸!<ØS­³±„[¹*b£›Î^r\"¹¼î—\$\n.V×Ú‡DŒ‰M°{£Aê‰|Ş¡9ËÖoM¶l÷|ˆİnm´ß\nmN£	e;¢à—¼÷m9Ë{êŸ§º”ğŞ\"™É¹G†%íø¢R]÷Ç¼ş4]^5ÌÃËanR,½!\nö@+©8ˆ\\‚@G1xn¼”*z©ñO¨}_Z>1Sû[ìü‡'ö[v4í®ÿ“ö¾ñ[ï?Tê^b{£ìSMx¥Uö—9hı.î”ÏÑê3|}¤+¼şöÿğSbĞ§óD_Üûçô|-‰¶¿x¹áúõ3oÿ¢Húâå¯råø¸L¶øÏæÿ£ŞÍÄ:Cï\$ùãÂ½!nşÏØ=Êîüğ\$I£	ˆ\rüâOnaa§&`-têjÁƒ¶EË¾Êv§,èœF\"Ğ¡b&ÁB(Ë\$80XG§\0;m@«<J¬@ÄCf”\r€V’@Ò`Öb˜j2£cXl\$ì\r Ìl„ş6 Œ™‡§Š˜ˆ2v@ª\n€Œ pŞpª9£jãa§¡^fƒû‚4#z¨¡R<ŒT`›\n°¯!f†\".!Ï£ŒÑú>d•#º+¦º¦^:Ï×M|Šˆ!j²Äz‹‚×\0˜\rçÒ9ƒ)„\r§˜2£R6\"Z'PèvRA<]lfĞ‚Êg‚êÕĞ¡X¥­b´\nz^ñíøÔñ\"î\n…ä¾£\$2À’\0Ş\0èš«\n¿ÃjÖnjğ\"Ğ*„T@AÌWëT§BĞÚl×\ntÛÊ´kVÚ‘ĞÜÊ1QnC¤NÍ|xgŒ\r*5¤î\nËèà\nÀÂ`ê Ú#x*AÍ‚Rk^ÁFuRÂbJ\r±n<qx¥¤`T¡\nÍá\\mıqz¦p\\\\«jT2¦Åñò°Äî3 ËÏÃÏÚâñÒédÆç\"<@	\0t	 š@¦\n`";break;case"en":$lb="A9D“yÔ@s:ÀGà¡(¸ffƒ‚Š¦ã	ˆÙ:ÄS°Şa2\"1¦..L'ƒI´êm‘#Çs,†KƒšOP#IÌ@%9¥i4Èo2ÏÆó €Ë,9%ÀPÀb2£a¸àr\n2›NCÈ(Şr4™Í1C`(:Ebç9AÈi:‰&ã™”åy·ˆFó½ĞY‚ˆ\r´\n– 8ZÔS=\$Aœ†¤`Ñ=ËÜŒ²‚0Ê\nÒãdFé	ŒŞn:ZÎ°)­ãQŒµ™öú£°Ak¾ßÄê}äˆe‹çADÍéœêaÊÄ¯ ¢„\\Ã}ö5ğ#|@èhÚ3·ÃN¾}@¡ÑiÕ¦/1_`¢&r½ìMºr™ÒĞ7ï˜˜½ P„µŒ#’Ê#Œ£{öÿ,¢˜ò¨¬-BüÆN’üŠ?n£®9ë8Èú3ˆ«®Ó‰ƒzÔ7:‹ğÚŞŒ­€@EkÒÄ‹¿q’€Aã@Şü£C«°)Š0:Ò9(Æ¦³k‹Qè;ü:ÉhKN Œèä2c(îKÓB‹4ât¼ß³£jŒCË:„³dÜ¤ÂÈ¼–Ã¨İ%¼«äÀ3ŒèÎÎO°´1\0Sz<ïÔ,ëÈÈ¤ŒqŠï\09ikl*8±œb3»óø×Ïªe1§˜ÆŞµ(@×\r±{Y0¬Âö1 1Êò7ˆ9´Ó²¿lLéÌ6%TğEàP†€¾È=°Œ1\"â1Dö•™jŠ“):	+\"£ÀáqÙã-£k¢àUl:b§f¯³²ó,Ã,B\r»ƒ0Ì6-m— «È¨7£Uò¯’¥*9c5MÅN\0XËÁIµ·ãr~­”àøM†!ˆâq¦-Œan€Ãc“Œy‘))Bö;8B!ŠbŒËã\\b,Ë¼	\"Î˜fKZQŒø*‡)9`Ù\$bëÖ8\r(É‹£·S±—cÚˆÜ”%P¤¶8Cñä©ûÅ¤‰Ğ€ŒÁèD4ƒ à9‡Ax^;ñrA¸ƒ\\³Œá|cÉ<Qˆç>…áB92£¦ü/¢ÍèÖ×Ë]xÂ'éô{è‘àÃ£M„]6ç.×êã…Îá%Êˆ@ø©È¤È2%‹ËP«{ˆ;ºb„wÔŠj\n@ õ¼}Úø\n\0R‘ )x“4YĞİgÕ~Å¶9ë•%‰r`7>'£¦~ºJr!>)êTš“Vu[1<Ok@ì‚ôD!.ä„¥”Òúoù  !ÄÙ¼ Ì`É€A1bôb«ÈñØƒ\$ù¸RPÉ^i{<)…EŠ‰Z@R&©PÏdJôÙkW%é:Õ^kÉ)ÎJŞrŸi(_J¼Ş™’<H	1í%WrdÉF\nlüõÄp‹Á\$„—â†YÃ)icÍ	€£\\L¢b,	á8P T *=‚\0ˆB`EK87†Â^Çá§\n\$0 õ‰\$@PT*ôå©õBË}>g3LS_a³‘ŠÅø&\0É))\ræ¨K#TQÃº,‡A¶YšvvÏCI!]èœ”U®‰Éñ‹5GÆ†Cï 2uII1¯NºV‰ÄJ3é­ĞŞÊÑšAY†“D|ÏéœHD0Ÿ!‡¼¢1ß0aÔ3†‡°öãÌw…¨®uç„ü‡P|¤¨‡#Cdy“3œÔ©®ƒƒ‚µ?‰%%“Sé3ËÓë˜…e­BPƒJ^¡i’FHàÚ‹Ú“	ÑdÄXSÓ S ¡ÉJĞ·8KÍ-•ÄÚ8G A\$ÉhŸÁÈùÂ#óPŒª\nÜâ#&\0ƒ\\„V´D¼„fg\0PR`¬ù„Sl%%YË@Î’ü˜ T!\$8_©	>_‡¦;×~g^BäF—Vãf‚“X à‚À˜0îœ	\r†>aF¿°º`è‘!	á-‹³kH—ôÓ€À&ÆëJì…xNÊØ“	\\¬Í¯&X+(ìl}%Ú·±›ch¬˜.±ú¸knõíÊä´IL²›b“Áê#‘]”BqrÈı¯®eİ`<r‡Î\nA\\2†+²±\"ó­«)è’SPFCƒĞcÅú¾\$ó	zƒe¯eœù„„YË(C:Èd»F—ø^“IŠ:ï2ÌÔ“^Ö1dúf1â8“fˆIM(ïàHNpö¤dã\nàÕ‹3Õíy\n†‹`Ì\nÚVwÃdâwÜº°Ö#L‡Jšu>ÀO e”².3Ø:‡‹ùxkÉ· by².Bw’brHåÁKé\\É4Ø[%¬#”š“”“1àPEĞß%»­e‹0™ÊóÌYª¶ql' 2F¼ÌlÏ‰r¦/>Ù×7Œã•KôÑ›–nÅæŞ³N.ÍsB¼¯%·0ôCÏf“Cé\\Ïrµywş­+V¥¡:«&DÖÒ˜+ŞmN:tØ¼üÿ5ccú˜ÂÙ€Íf«ÍV 4ú:j=¢ójx§¡9†V«ôÆ×;bì}¨k\$Ñ¦D%Jš³ò‚\\ìGË®¹!Ù•H>5†åÄËÉ°ÊÅá3åx%5âER×J¯TE.4Ü¦Çy\\ó|Ğ)íë¬dy·OZúïbSıM¶Êìšæ-\0%y_¶¤|ã¤)Gdb™£H>¯Ø_‰ëìõ†´_âk’¯ííŸ¯ñÑ«ÏÃlœUÊÑ–¯ÒXj–”îKXñ´æó¤¿®EgÊì\0OcÊÁ²äv<dJLm«5oWr|?›&¬ÓüWL’¥Óq6Ğç5çš±\$÷Ñ–b23~¨şBIÒ£EŸ±©PÈ•ªÍ8!,x²IÆ•[÷çãz42÷«Ì¶|ïÙ£¬èUÍKïƒçGÄ›=ù&w7zå8‹Èø¶J9¯ušûGrÉÀ©R'òp¿Ğ%¾©²½!i©<{™Í3é|]e?Şª³…BZiùy\n§Éu\nóîıNåÓGàznëkÈH:çõsNâY°î!Ù¢švmÛZÏ\rd˜‹¼‹wö–ÛùçíëQ~İc„d¸–Ğ—÷?V\nøZ¦Í³bğXr”ËÒÿÓMàØ`Æ`\0Æ\rmâ\$iR#GàÒÆ/Ò'\rÖÀ†: ¨ÀZŠ5Å.ëf´Î(éÂZ®ïëÏò L='¬÷çŒ'0^©¦ŞCD–Bïâ¡.Œ>cj÷C±)Âªb—fahVÇ¬œ%	&:**&\$s	f@\rÆZ¥‘¢ \"K,W¬òJdöÒp²ÀOô„éx1¬DœğÁÌ\\5ÆÀš,d.pÎÏ.ö…ğÌül<Wƒô¡ĞÊLğ\$\$º0¥¦‰ìßÏÖ¡€Š@pÎÀ@	‰<Q*R)ñlÌ\0Œ #N«Pü%D´œÆ\0'bBã¾œ‹ %é”&B'dÀ-€óÀ†<î&àl*‚í#ì–Ğz\rÓ\n)­‰òó„_)„¸änîñÆCD¶óIĞZnŞ] ‚)¢Ô«ã.öë ZEâLãÈ.*KwÑ°\r´ÃÑ¶À";break;case"zh-tw":$lb="ä^¨ê%Ó•\\šr¥ÑÎõâ|%ÌÎu:HçB(\\Ë4«‘pŠr –neRQÌ¡D8Ğ S•\nt*.tÒI&”G‘N”ÊAÊ¤S¹V÷:	t%9Sy:\"<r«STâ ,#!˜Ğj61uL\0¼–£“îU:.–²I9“ˆ—BÍæK&]\nDªXç[ªÅ}-,°r¨“ÖûÎöŒ¿‹&ó¨€Ğa;Dãx€àr4&Ã)œÊs3§SÂtÍ\rAĞÂbÒ¥¨E•E1»ŞÔ£Êg:åxç]#0, (§˜4›Œü\r÷ñˆÅG‘qäZ†–¢SÅ )ĞªOLP\0¨ıÎ”«:}µï»áÚr¢òå´yZî¤se¢\\BœÅABs–¤ @¤2*bPr–î\n¦ªÂ\$©p¨’êY.R®DùÌLGI,I¥¥i.O	.½ªÇ#’t’\0F¥¥É|€¯2ì¼')tUœå™w/ax].J2«¥Áft(qÊWÈĞº®ëÌ„U¢äÉv—ªY`\\…É\nsÌS \$£ƒH6Œ£péµ£d7ŒKV9³B˜¢&\r-ƒtt%ÄCË’\0t”%yÎRPa s-¯a~WÄ¡r’GALKFÕ9OQ«ÍJë±\$ñÒPMdÙ\\‡Ï£òØ˜SGÑ4ZZC—§45G“d1ÊH\nY N(KqÈ]—g1GÆç9{YœÄq%!ôy2¨ÅPQDÇ1pM×iâ|ƒB Ê<NçI*[ÈE2ZE£¥é8Ã¨Ø65-»HcÂ79ÔÊH—¶{ÊtåQË|\\•j–D’q2Ür·õMN—5Lƒ!ãõDU/”µ1—t«ç‘FU3‘Kç1<[ejYX§©iWÍÇ.~råÒ[–œù~N½/‘ô»‘Ì†RZÒôÍEd86ƒ“\$ÊäÍ\rã0Ì6:#+u6Lz-Ú7³£n<„¨Ü9£ÆÓc5ü\rƒxÎèacR9nƒÎ0º!Ï£k¢:×ÖÖŒØDBib˜¤#OÃ\\ê¿>DYÒC‘®¼Ø^F‰‚ør’Åt\"D'ÄQ?¶h…Ó\")ïƒHŞ7¡eDÑ\nFt½?RÃ÷)JÈ‰£æØL÷¤9ãxå>İã€Ó±Œp@,¶Æ3¡Ğ:ƒ€æáxïù…ÃÉÉ\rÃ(ä{C8^_úğN¡Íßà^˜r4ÁÑô…ópÁÃX\"ÉÁ9Tèà/ ù<ôâ~ƒÁ…Ñ8äîÓr)Øİ;ÀçûÁâWˆĞ(…Xå®Üø0F*A(-˜Âä\"Vx»GŠtWa-ØP	A a\n‚R„0D‚\"aó˜®hša\$G@­Œ¬óhh Dq.&ÉÍ¡ÁÌ+…ªÂœ¢FQ8 	ùA,îùªÑÊ\"…\$3\0òØ iO¦q;¨\0ÜŸM‘´\rŒ8‡SNÃ0r\rá´îÚ^©²N €1¸\0jM™¨)µ\0  Â˜TĞR1\"€_—0›(Q¡¥a©\0…Ò\"¹²b+H1q°É™Vğ\rc~Í„ ÒÁ‚	€€334hŸ(F\nA°Éwœ^ÒwP³’QJE\0ŒËû%¢KA|!‡H¥,P\n„xNT(@‚(\n¡ €\"P˜h‚.Xèàrˆñ¨Øç&J<P‰áÊ'‹rò^‚é{5u^!@PD¡˜0¯äîƒl“Ç˜T±Ğ)Å†;xíÃ¼x	Ñg°\\º”EÅ8»<„^1FAÍ‘«å\nŸ“Æ&E!‘jê.­´v\\€Ì=eJ‚Ts‰²*ZÜ?(½¦\\\"£Ñb\0sRÜR8‰ÈVÁ4R4ï)EHƒâZO	†©ÁQEÕ†)\n=Ôs\"Spæ ´§\$JÃHz (!Ê0àå-[¼4ŒØCÃWÏ,?s39¥³¨ÊĞˆªT*Rµ\$ ~ˆ¸´C”^#ÑÈ¦Ù\0ç¹W2çOñÌ.„VH\$L²QsP¤4üŸÔaN.XåIõ™¤ˆºzÈ¼½EXs&tÓ\r\0£RÇ˜^!¶İh¯¼[´Š¸‹¥ºŒØ»Ö”¼ŞÃæ{Oy‚™ *‡…@‚Â@ “¯è4švÂØÌØo’¦°8OÊøJXŸ£ TŠ'V{Äøégçœò¹\0@Á´1ä´O‹s9±V,A<%¼w cèéû¢Ät‰ñ‹›a¢ìRQÖLy‘xJ½cR9rÀ¡ˆ=> qnZÌ\"0(G\$åwe,’”ÒtHEt'8ç‡„9Å°“†ğä@‰Ì#–…õDIi6ù‘qlğÅ\0š,N\$áP„„E“Ìû1i…~.±”MDƒ—BaZ(‰hƒ†ŠEIêf*…!1¯Âİ!Œ„!KÒ°s`Ú\0…¤AŸS¤ˆ®xZ¯U7„9„Ø´:ô¼s«,´…UaŠÚŠÊEÌÿ vm`¸ÕjŞºô+sÕ8¹Ü=<-ĞÈ7]¦uâ@FÒ\$“u Qâ€HLôZÊÆºŞ’Òv6\"8ëà#—ÒG¿Énçº\nzé\\»›®ÍRš”\"è¹J—¬_%»Ó{`Æ ğ·\ra™nÎ˜|¥FêŞ×7­!¥4ô¿Ì·{&æÕg•óKÜÒÒÿ7§ˆò\\fd\"ùåçİß–ŞqÄÙå-	ä#Ó®HWff¼Œ~ÌÉy7'ò‰X	üıŸôZôıÓÚolé<û¸vºdo×'Çèr‰#•vÅBAïÎ’áoöª(š².7Á9Tê~Á\"¼ûáƒ.hq[¨pÈğ”º˜FŞso0\"\r÷’ËW‹»P=ª§<\rÆ»×€Å3K‘»º‚ TJ¾tÎ)=ÕÄ÷¼®®óïƒïï=¬ÿRökq‚x¶íÌƒè`®çYş¯Òœä\\ıœvÅÖ	Álh¶æT'HpæëwÉa1‰ğ¾Œqt.SÖ°7ÓSÅDHúëÚÿüï h…‚Xo¸xŒûğ¯.”¬å^'Â¤ÿÂZjL\$Oã¯œ<Šä?P\0¬®oô0:ğíğBöîé\$;jÁ.øg\n¥Nd`ûğsÍb¼ëÒIğF½ğ~ù-¼øªÏKâ¾pnU}	+×ëÛ	ä½dFD¤N=Âú/ì÷ì >Ğ™0G¬\$°>>ƒíc\"	¤\rN\"êà[‚–ËgfJ¦ÆÌÌ\0 ”Fö…àP4àR—hpAÔÍPHQF¢.z%ÁbÌ‡‚@B.±\nÔåhÌÍ¶ÙA?a1ÆÉÃ\"fº\r€V• Ò`Öb|ªp§Cbn\$ø\r Ìn…\n7@ŒœÈ<§¦›£4q ª\n€Œ pêqf:Ctå†yÌÌHÂ#B8¬f²Ådö@›qjQá.ĞÖ|9ƒC–Øh¿F¨¼o¸¬M\")hş¯ä;…^,Ú\rçì:#¦	‘ìr'´3C\\6Æ.¯‚æeA<_m×aÎ,­ÇAĞ¡©R%‹ŒÛí!Ñn„Ğ&(EêNR2 ¨`L<2ã3ÉV\ràà€ÒrKTÅ&ïÏ˜i¯\$«aÌYeš%«šß.Lä\nX¹.,²x^ÆE!-@Â,Çå†z'¨\r*rµ,N\0¬Ã î@¬ Æ ê\r±Ü\0f„ÃÂÆl»%@ÈÊİà-tMbÊ<Ò©Cò1\nÂjÕ-ê¢<Ò-#\0†lc^3Få)r›% @4@Ë*pJ=ƒêÂ0¾Õn8-Å²PòAÌš0ªDÄP	\0@š	 t\n`¦";break;}$Vg=array();foreach(explode("\n",lzw_decompress($lb))as$X)$Vg[]=(strpos($X,"\t")?explode("\t",$X):$X);return$Vg;}if(!$Vg)$Vg=get_translations($ca);if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$df=array_search("SQL",$b->operators);if($df!==false)unset($b->operators[$df]);}function
dsn($Ub,$V,$Xe){try{parent::__construct($Ub,$V,$Xe);}catch(Exception$mc){auth_error($mc->getMessage());}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($H,$dh=false){$I=parent::query($H);$this->error="";if(!$I){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($I);return$I;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result($I=null){if(!$I){$I=$this->_result;if(!$I)return
false;}if($I->columnCount()){$I->num_rows=$I->rowCount();return$I;}$this->affected_rows=$I->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($H,$l=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch();return$K[$l];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$K=(object)$this->getColumnMeta($this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=(in_array("blob",(array)$K->flags)?63:0);return$K;}}}$Pb=array();class
Min_SQL{var$_conn;function
__construct($f){$this->_conn=$f;}function
select($Q,$M,$Z,$q,$De=array(),$y=1,$E=0,$lf=false){global$b,$w;$ld=(count($q)<count($M));$H=$b->selectQueryBuild($M,$Z,$q,$De,$y,$E);if(!$H)$H="SELECT".limit(($_GET["page"]!="last"&&+$y&&$q&&$ld&&$w=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$M)."\nFROM ".table($Q),($Z?"\nWHERE ".implode(" AND ",$Z):"").($q&&$ld?"\nGROUP BY ".implode(", ",$q):"").($De?"\nORDER BY ".implode(", ",$De):""),($y!=""?+$y:null),($E?$y*$E:0),"\n");$kg=microtime(true);$J=$this->_conn->query($H);if($lf)echo$b->selectQuery($H,format_time($kg));return$J;}function
delete($Q,$tf,$y=0){$H="FROM ".table($Q);return
queries("DELETE".($y?limit1($H,$tf):" $H$tf"));}function
update($Q,$O,$tf,$y=0,$Xf="\n"){$sh=array();foreach($O
as$x=>$X)$sh[]="$x = $X";$H=table($Q)." SET$Xf".implode(",$Xf",$sh);return
queries("UPDATE".($y?limit1($H,$tf):" $H$tf"));}function
insert($Q,$O){return
queries("INSERT INTO ".table($Q).($O?" (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")":" DEFAULT VALUES"));}function
insertUpdate($Q,$L,$jf){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}}$Pb["sqlite"]="SQLite 3";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$gf=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
__construct($n){$this->_link=new
SQLite3($n);$vh=$this->_link->version();$this->server_info=$vh["versionString"];}function
query($H){$I=@$this->_link->query($H);$this->error="";if(!$I){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($I->numColumns())return
new
Min_Result($I);$this->affected_rows=$this->_link->changes();return
true;}function
quote($P){return(is_utf8($P)?"'".$this->_link->escapeString($P)."'":"x'".reset(unpack('H*',$P))."'");}function
store_result(){return$this->_result;}function
result($H,$l=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetchArray();return$K[$l];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($I){$this->_result=$I;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$d=$this->_offset++;$U=$this->_result->columnType($d);return(object)array("name"=>$this->_result->columnName($d),"type"=>$U,"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
__construct($n){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($n);}function
query($H,$dh=false){$Yd=($dh?"unbufferedQuery":"query");$I=@$this->_link->$Yd($H,SQLITE_BOTH,$k);$this->error="";if(!$I){$this->error=$k;return
false;}elseif($I===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($I);}function
quote($P){return"'".sqlite_escape_string($P)."'";}function
store_result(){return$this->_result;}function
result($H,$l=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetch();return$K[$l];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($I){$this->_result=$I;if(method_exists($I,'numRows'))$this->num_rows=$I->numRows();}function
fetch_assoc(){$K=$this->_result->fetch(SQLITE_ASSOC);if(!$K)return
false;$J=array();foreach($K
as$x=>$X)$J[($x[0]=='"'?idf_unescape($x):$x)]=$X;return$J;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$D=$this->_result->fieldName($this->_offset++);$Ze='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($Ze\\.)?$Ze\$~",$D,$A)){$Q=($A[3]!=""?$A[3]:idf_unescape($A[2]));$D=($A[5]!=""?$A[5]:idf_unescape($A[4]));}return(object)array("name"=>$D,"orgname"=>$D,"orgtable"=>$Q,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
__construct($n){$this->dsn(DRIVER.":$n","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
__construct(){parent::__construct(":memory:");}function
select_db($n){if(is_readable($n)&&$this->query("ATTACH ".$this->quote(preg_match("~(^[/\\\\]|:)~",$n)?$n:dirname($_SERVER["SCRIPT_FILENAME"])."/$n")." AS a")){parent::__construct($n);return
true;}return
false;}function
multi_query($H){return$this->_result=$this->query($H);}function
next_result(){return
false;}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($Q,$L,$jf){$sh=array();foreach($L
as$O)$sh[]="(".implode(", ",$O).")";return
queries("REPLACE INTO ".table($Q)." (".implode(", ",array_keys(reset($L))).") VALUES\n".implode(",\n",$sh));}}function
idf_escape($t){return'"'.str_replace('"','""',$t).'"';}function
table($t){return
idf_escape($t);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($H,$Z,$y,$oe=0,$Xf=" "){return" $H$Z".($y!==null?$Xf."LIMIT $y".($oe?" OFFSET $oe":""):"");}function
limit1($H,$Z){global$f;return($f->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($H,$Z,1):" $H$Z");}function
db_collation($j,$fb){global$f;return$f->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($i){return
array();}function
table_status($D=""){global$f;$J=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view') ".($D!=""?"AND name = ".q($D):"ORDER BY name"))as$K){$K["Oid"]=1;$K["Auto_increment"]="";$K["Rows"]=$f->result("SELECT COUNT(*) FROM ".idf_escape($K["Name"]));$J[$K["Name"]]=$K;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$K)$J[$K["name"]]["Auto_increment"]=$K["seq"];return($D!=""?$J[$D]:$J);}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){global$f;return!$f->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($Q){global$f;$J=array();$jf="";foreach(get_rows("PRAGMA table_info(".table($Q).")")as$K){$D=$K["name"];$U=strtolower($K["type"]);$Db=$K["dflt_value"];$J[$D]=array("field"=>$D,"type"=>(preg_match('~int~i',$U)?"integer":(preg_match('~char|clob|text~i',$U)?"text":(preg_match('~blob~i',$U)?"blob":(preg_match('~real|floa|doub~i',$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(preg_match("~'(.*)'~",$Db,$A)?str_replace("''","'",$A[1]):($Db=="NULL"?null:$Db)),"null"=>!$K["notnull"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$K["pk"],);if($K["pk"]){if($jf!="")$J[$jf]["auto_increment"]=false;elseif(preg_match('~^integer$~i',$U))$J[$D]["auto_increment"]=true;$jf=$D;}}$ig=$f->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($Q));preg_match_all('~(("[^"]*+")+|[a-z0-9_]+)\s+text\s+COLLATE\s+(\'[^\']+\'|\S+)~i',$ig,$B,PREG_SET_ORDER);foreach($B
as$A){$D=str_replace('""','"',preg_replace('~^"|"$~','',$A[1]));if($J[$D])$J[$D]["collation"]=trim($A[3],"'");}return$J;}function
indexes($Q,$g=null){global$f;if(!is_object($g))$g=$f;$J=array();$ig=$g->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($Q));if(preg_match('~\bPRIMARY\s+KEY\s*\((([^)"]+|"[^"]*")++)~i',$ig,$A)){$J[""]=array("type"=>"PRIMARY","columns"=>array(),"lengths"=>array(),"descs"=>array());preg_match_all('~((("[^"]*+")+)|(\S+))(\s+(ASC|DESC))?(,\s*|$)~i',$A[1],$B,PREG_SET_ORDER);foreach($B
as$A){$J[""]["columns"][]=idf_unescape($A[2]).$A[4];$J[""]["descs"][]=(preg_match('~DESC~i',$A[5])?'1':null);}}if(!$J){foreach(fields($Q)as$D=>$l){if($l["primary"])$J[""]=array("type"=>"PRIMARY","columns"=>array($D),"lengths"=>array(),"descs"=>array(null));}}$jg=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($Q),$g);foreach(get_rows("PRAGMA index_list(".table($Q).")",$g)as$K){$D=$K["name"];$u=array("type"=>($K["unique"]?"UNIQUE":"INDEX"));$u["lengths"]=array();$u["descs"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($D).")",$g)as$Of){$u["columns"][]=$Of["name"];$u["descs"][]=null;}if(preg_match('~^CREATE( UNIQUE)? INDEX '.preg_quote(idf_escape($D).' ON '.idf_escape($Q),'~').' \((.*)\)$~i',$jg[$D],$Df)){preg_match_all('/("[^"]*+")+( DESC)?/',$Df[2],$B);foreach($B[2]as$x=>$X){if($X)$u["descs"][$x]='1';}}if(!$J[""]||$u["type"]!="UNIQUE"||$u["columns"]!=$J[""]["columns"]||$u["descs"]!=$J[""]["descs"]||!preg_match("~^sqlite_~",$D))$J[$D]=$u;}return$J;}function
foreign_keys($Q){$J=array();foreach(get_rows("PRAGMA foreign_key_list(".table($Q).")")as$K){$o=&$J[$K["id"]];if(!$o)$o=$K;$o["source"][]=$K["from"];$o["target"][]=$K["to"];}return$J;}function
view($D){global$f;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$f->result("SELECT sql FROM sqlite_master WHERE name = ".q($D))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($j){return
false;}function
error(){global$f;return
h($f->error);}function
check_sqlite_name($D){global$f;$vc="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($vc)\$~",$D)){$f->error=lang(21,str_replace("|",", ",$vc));return
false;}return
true;}function
create_database($j,$eb){global$f;if(file_exists($j)){$f->error=lang(22);return
false;}if(!check_sqlite_name($j))return
false;try{$z=new
Min_SQLite($j);}catch(Exception$mc){$f->error=$mc->getMessage();return
false;}$z->query('PRAGMA encoding = "UTF-8"');$z->query('CREATE TABLE adminer (i)');$z->query('DROP TABLE adminer');return
true;}function
drop_databases($i){global$f;$f->__construct(":memory:");foreach($i
as$j){if(!@unlink($j)){$f->error=lang(22);return
false;}}return
true;}function
rename_database($D,$eb){global$f;if(!check_sqlite_name($D))return
false;$f->__construct(":memory:");$f->error=lang(22);return@rename(DB,$D);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($Q,$D,$m,$Dc,$jb,$fc,$eb,$Da,$Ue){$nh=($Q==""||$Dc);foreach($m
as$l){if($l[0]!=""||!$l[1]||$l[2]){$nh=true;break;}}$c=array();$Le=array();foreach($m
as$l){if($l[1]){$c[]=($nh?$l[1]:"ADD ".implode($l[1]));if($l[0]!="")$Le[$l[0]]=$l[1][0];}}if(!$nh){foreach($c
as$X){if(!queries("ALTER TABLE ".table($Q)." $X"))return
false;}if($Q!=$D&&!queries("ALTER TABLE ".table($Q)." RENAME TO ".table($D)))return
false;}elseif(!recreate_table($Q,$D,$c,$Le,$Dc))return
false;if($Da)queries("UPDATE sqlite_sequence SET seq = $Da WHERE name = ".q($D));return
true;}function
recreate_table($Q,$D,$m,$Le,$Dc,$v=array()){if($Q!=""){if(!$m){foreach(fields($Q)as$x=>$l){$m[]=process_field($l,$l);$Le[$x]=idf_escape($x);}}$kf=false;foreach($m
as$l){if($l[6])$kf=true;}$Sb=array();foreach($v
as$x=>$X){if($X[2]=="DROP"){$Sb[$X[1]]=true;unset($v[$x]);}}foreach(indexes($Q)as$ud=>$u){$e=array();foreach($u["columns"]as$x=>$d){if(!$Le[$d])continue
2;$e[]=$Le[$d].($u["descs"][$x]?" DESC":"");}if(!$Sb[$ud]){if($u["type"]!="PRIMARY"||!$kf)$v[]=array($u["type"],$ud,$e);}}foreach($v
as$x=>$X){if($X[0]=="PRIMARY"){unset($v[$x]);$Dc[]="  PRIMARY KEY (".implode(", ",$X[2]).")";}}foreach(foreign_keys($Q)as$ud=>$o){foreach($o["source"]as$x=>$d){if(!$Le[$d])continue
2;$o["source"][$x]=idf_unescape($Le[$d]);}if(!isset($Dc[" $ud"]))$Dc[]=" ".format_foreign_key($o);}queries("BEGIN");}foreach($m
as$x=>$l)$m[$x]="  ".implode($l);$m=array_merge($m,array_filter($Dc));if(!queries("CREATE TABLE ".table($Q!=""?"adminer_$D":$D)." (\n".implode(",\n",$m)."\n)"))return
false;if($Q!=""){if($Le&&!queries("INSERT INTO ".table("adminer_$D")." (".implode(", ",$Le).") SELECT ".implode(", ",array_map('idf_escape',array_keys($Le)))." FROM ".table($Q)))return
false;$Zg=array();foreach(triggers($Q)as$Xg=>$Kg){$Wg=trigger($Xg);$Zg[]="CREATE TRIGGER ".idf_escape($Xg)." ".implode(" ",$Kg)." ON ".table($D)."\n$Wg[Statement]";}if(!queries("DROP TABLE ".table($Q)))return
false;queries("ALTER TABLE ".table("adminer_$D")." RENAME TO ".table($D));if(!alter_indexes($D,$v))return
false;foreach($Zg
as$Wg){if(!queries($Wg))return
false;}queries("COMMIT");}return
true;}function
index_sql($Q,$U,$D,$e){return"CREATE $U ".($U!="INDEX"?"INDEX ":"").idf_escape($D!=""?$D:uniqid($Q."_"))." ON ".table($Q)." $e";}function
alter_indexes($Q,$c){foreach($c
as$jf){if($jf[0]=="PRIMARY")return
recreate_table($Q,$Q,array(),array(),array(),$c);}foreach(array_reverse($c)as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):index_sql($Q,$X[0],$X[1],"(".implode(", ",$X[2]).")")))return
false;}return
true;}function
truncate_tables($S){return
apply_queries("DELETE FROM",$S);}function
drop_views($xh){return
apply_queries("DROP VIEW",$xh);}function
drop_tables($S){return
apply_queries("DROP TABLE",$S);}function
move_tables($S,$xh,$Cg){return
false;}function
trigger($D){global$f;if($D=="")return
array("Statement"=>"BEGIN\n\t;\nEND");$t='(?:[^`"\\s]+|`[^`]*`|"[^"]*")+';$Yg=trigger_options();preg_match("~^CREATE\\s+TRIGGER\\s*$t\\s*(".implode("|",$Yg["Timing"]).")\\s+([a-z]+)(?:\\s+OF\\s+($t))?\\s+ON\\s*$t\\s*(?:FOR\\s+EACH\\s+ROW\\s)?(.*)~is",$f->result("SELECT sql FROM sqlite_master WHERE type = 'trigger' AND name = ".q($D)),$A);$ne=$A[3];return
array("Timing"=>strtoupper($A[1]),"Event"=>strtoupper($A[2]).($ne?" OF":""),"Of"=>($ne[0]=='`'||$ne[0]=='"'?idf_unescape($ne):$ne),"Trigger"=>$D,"Statement"=>$A[4],);}function
triggers($Q){$J=array();$Yg=trigger_options();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($Q))as$K){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*('.implode("|",$Yg["Timing"]).')\\s*(.*)\\s+ON\\b~iU',$K["sql"],$A);$J[$K["name"]]=array($A[1],$A[2]);}return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","UPDATE OF","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($D,$U){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
last_id(){global$f;return$f->result("SELECT LAST_INSERT_ROWID()");}function
explain($f,$H){return$f->query("EXPLAIN QUERY PLAN $H");}function
found_rows($R,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Sf){return
true;}function
create_sql($Q,$Da){global$f;$J=$f->result("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($Q));foreach(indexes($Q)as$D=>$u){if($D=='')continue;$J.=";\n\n".index_sql($Q,$u['type'],$D,"(".implode(", ",array_map('idf_escape',$u['columns'])).")");}return$J;}function
truncate_sql($Q){return"DELETE FROM ".table($Q);}function
use_sql($zb){}function
trigger_sql($Q,$pg){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($Q)));}function
show_variables(){global$f;$J=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$x)$J[$x]=$f->result("PRAGMA $x");return$J;}function
show_status(){$J=array();foreach(get_vals("PRAGMA compile_options")as$Ae){list($x,$X)=explode("=",$Ae,2);$J[$x]=$X;}return$J;}function
convert_field($l){}function
unconvert_field($l,$J){return$J;}function
support($yc){return
preg_match('~^(columns|database|drop_col|dump|indexes|move_col|sql|status|table|trigger|variables|view|view_trigger)$~',$yc);}$w="sqlite";$ch=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$og=array_keys($ch);$jh=array();$ze=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");$Lc=array("hex","length","lower","round","unixepoch","upper");$Pc=array("avg","count","count distinct","group_concat","max","min","sum");$Xb=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$Pb["simpledb"]="SimpleDB";if(isset($_GET["simpledb"])){$gf=array("SimpleXML");define("DRIVER","simpledb");if(class_exists('SimpleXMLElement')){class
Min_DB{var$extension="SimpleXML",$server_info='2009-04-15',$error,$timeout,$next,$affected_rows,$_result;function
select_db($zb){return($zb=="domain");}function
query($H,$dh=false){$F=array('SelectExpression'=>$H,'ConsistentRead'=>'true');if($this->next)$F['NextToken']=$this->next;$I=sdb_request_all('Select','Item',$F,$this->timeout);if($I===false)return$I;if(preg_match('~^\s*SELECT\s+COUNT\(~i',$H)){$sg=0;foreach($I
as$pd)$sg+=$pd->Attribute->Value;$I=array((object)array('Attribute'=>array((object)array('Name'=>'Count','Value'=>$sg,))));}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
quote($P){return"'".str_replace("'","''",$P)."'";}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0;function
__construct($I){foreach($I
as$pd){$K=array();if($pd->Name!='')$K['itemName()']=(string)$pd->Name;foreach($pd->Attribute
as$Aa){$D=$this->_processValue($Aa->Name);$Y=$this->_processValue($Aa->Value);if(isset($K[$D])){$K[$D]=(array)$K[$D];$K[$D][]=$Y;}else$K[$D]=$Y;}$this->_rows[]=$K;foreach($K
as$x=>$X){if(!isset($this->_rows[0][$x]))$this->_rows[0][$x]=null;}}$this->num_rows=count($this->_rows);}function
_processValue($ac){return(is_object($ac)&&$ac['encoding']=='base64'?base64_decode($ac):(string)$ac);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$x=>$X)$J[$x]=$K[$x];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$vd=array_keys($this->_rows[0]);return(object)array('name'=>$vd[$this->_offset++]);}}}class
Min_Driver
extends
Min_SQL{public$jf="itemName()";function
_chunkRequest($Zc,$pa,$F,$qc=array()){global$f;foreach(array_chunk($Zc,25)as$Xa){$Qe=$F;foreach($Xa
as$r=>$s){$Qe["Item.$r.ItemName"]=$s;foreach($qc
as$x=>$X)$Qe["Item.$r.$x"]=$X;}if(!sdb_request($pa,$Qe))return
false;}$f->affected_rows=count($Zc);return
true;}function
_extractIds($Q,$tf,$y){$J=array();if(preg_match_all("~itemName\(\) = (('[^']*+')+)~",$tf,$B))$J=array_map('idf_unescape',$B[1]);else{foreach(sdb_request_all('Select','Item',array('SelectExpression'=>'SELECT itemName() FROM '.table($Q).$tf.($y?" LIMIT 1":"")))as$pd)$J[]=$pd->Name;}return$J;}function
select($Q,$M,$Z,$q,$De=array(),$y=1,$E=0,$lf=false){global$f;$f->next=$_GET["next"];$J=parent::select($Q,$M,$Z,$q,$De,$y,$E,$lf);$f->next=0;return$J;}function
delete($Q,$tf,$y=0){return$this->_chunkRequest($this->_extractIds($Q,$tf,$y),'BatchDeleteAttributes',array('DomainName'=>$Q));}function
update($Q,$O,$tf,$y=0,$Xf="\n"){$Eb=array();$gd=array();$r=0;$Zc=$this->_extractIds($Q,$tf,$y);$s=idf_unescape($O["`itemName()`"]);unset($O["`itemName()`"]);foreach($O
as$x=>$X){$x=idf_unescape($x);if($X=="NULL"||($s!=""&&array($s)!=$Zc))$Eb["Attribute.".count($Eb).".Name"]=$x;if($X!="NULL"){foreach((array)$X
as$rd=>$W){$gd["Attribute.$r.Name"]=$x;$gd["Attribute.$r.Value"]=(is_array($X)?$W:idf_unescape($W));if(!$rd)$gd["Attribute.$r.Replace"]="true";$r++;}}}$F=array('DomainName'=>$Q);return(!$gd||$this->_chunkRequest(($s!=""?array($s):$Zc),'BatchPutAttributes',$F,$gd))&&(!$Eb||$this->_chunkRequest($Zc,'BatchDeleteAttributes',$F,$Eb));}function
insert($Q,$O){$F=array("DomainName"=>$Q);$r=0;foreach($O
as$D=>$Y){if($Y!="NULL"){$D=idf_unescape($D);if($D=="itemName()")$F["ItemName"]=idf_unescape($Y);else{foreach((array)$Y
as$X){$F["Attribute.$r.Name"]=$D;$F["Attribute.$r.Value"]=(is_array($Y)?$X:idf_unescape($Y));$r++;}}}}return
sdb_request('PutAttributes',$F);}function
insertUpdate($Q,$L,$jf){foreach($L
as$O){if(!$this->update($Q,$O,"WHERE `itemName()` = ".q($O["`itemName()`"])))return
false;}return
true;}function
begin(){return
false;}function
commit(){return
false;}function
rollback(){return
false;}}function
connect(){return
new
Min_DB;}function
support($yc){return
preg_match('~sql~',$yc);}function
logged_user(){global$b;$vb=$b->credentials();return$vb[1];}function
get_databases(){return
array("domain");}function
collations(){return
array();}function
db_collation($j,$fb){}function
tables_list(){global$f;$J=array();foreach(sdb_request_all('ListDomains','DomainName')as$Q)$J[(string)$Q]='table';if($f->error&&defined("PAGE_HEADER"))echo"<p class='error'>".error()."\n";return$J;}function
table_status($D="",$xc=false){$J=array();foreach(($D!=""?array($D=>true):tables_list())as$Q=>$U){$K=array("Name"=>$Q,"Auto_increment"=>"");if(!$xc){$Xd=sdb_request('DomainMetadata',array('DomainName'=>$Q));if($Xd){foreach(array("Rows"=>"ItemCount","Data_length"=>"ItemNamesSizeBytes","Index_length"=>"AttributeValuesSizeBytes","Data_free"=>"AttributeNamesSizeBytes",)as$x=>$X)$K[$x]=(string)$Xd->$X;}}if($D!="")return$K;$J[$Q]=$K;}return$J;}function
explain($f,$H){}function
error(){global$f;return
h($f->error);}function
information_schema(){}function
is_view($R){}function
indexes($Q,$g=null){return
array(array("type"=>"PRIMARY","columns"=>array("itemName()")),);}function
fields($Q){return
fields_from_edit();}function
foreign_keys($Q){return
array();}function
table($t){return
idf_escape($t);}function
idf_escape($t){return"`".str_replace("`","``",$t)."`";}function
limit($H,$Z,$y,$oe=0,$Xf=" "){return" $H$Z".($y!==null?$Xf."LIMIT $y":"");}function
unconvert_field($l,$J){return$J;}function
fk_support($R){}function
engines(){return
array();}function
alter_table($Q,$D,$m,$Dc,$jb,$fc,$eb,$Da,$Ue){return($Q==""&&sdb_request('CreateDomain',array('DomainName'=>$D)));}function
drop_tables($S){foreach($S
as$Q){if(!sdb_request('DeleteDomain',array('DomainName'=>$Q)))return
false;}return
true;}function
count_tables($i){foreach($i
as$j)return
array($j=>count(tables_list()));}function
found_rows($R,$Z){return($Z?null:$R["Rows"]);}function
last_id(){}function
hmac($va,$xb,$x,$xf=false){$Ma=64;if(strlen($x)>$Ma)$x=pack("H*",$va($x));$x=str_pad($x,$Ma,"\0");$sd=$x^str_repeat("\x36",$Ma);$td=$x^str_repeat("\x5C",$Ma);$J=$va($td.pack("H*",$va($sd.$xb)));if($xf)$J=pack("H*",$J);return$J;}function
sdb_request($pa,$F=array()){global$b,$f;list($Wc,$F['AWSAccessKeyId'],$Tf)=$b->credentials();$F['Action']=$pa;$F['Timestamp']=gmdate('Y-m-d\TH:i:s+00:00');$F['Version']='2009-04-15';$F['SignatureVersion']=2;$F['SignatureMethod']='HmacSHA1';ksort($F);$H='';foreach($F
as$x=>$X)$H.='&'.rawurlencode($x).'='.rawurlencode($X);$H=str_replace('%7E','~',substr($H,1));$H.="&Signature=".urlencode(base64_encode(hmac('sha1',"POST\n".preg_replace('~^https?://~','',$Wc)."\n/\n$H",$Tf,true)));@ini_set('track_errors',1);$_c=@file_get_contents((preg_match('~^https?://~',$Wc)?$Wc:"http://$Wc"),false,stream_context_create(array('http'=>array('method'=>'POST','content'=>$H,'ignore_errors'=>1,))));if(!$_c){$f->error=$php_errormsg;return
false;}libxml_use_internal_errors(true);$Ch=simplexml_load_string($_c);if(!$Ch){$k=libxml_get_last_error();$f->error=$k->message;return
false;}if($Ch->Errors){$k=$Ch->Errors->Error;$f->error="$k->Message ($k->Code)";return
false;}$f->error='';$Bg=$pa."Result";return($Ch->$Bg?$Ch->$Bg:true);}function
sdb_request_all($pa,$Bg,$F=array(),$Jg=0){$J=array();$kg=($Jg?microtime(true):0);$y=(preg_match('~LIMIT\s+(\d+)\s*$~i',$F['SelectExpression'],$A)?$A[1]:0);do{$Ch=sdb_request($pa,$F);if(!$Ch)break;foreach($Ch->$Bg
as$ac)$J[]=$ac;if($y&&count($J)>=$y){$_GET["next"]=$Ch->NextToken;break;}if($Jg&&microtime(true)-$kg>$Jg)return
false;$F['NextToken']=$Ch->NextToken;if($y)$F['SelectExpression']=preg_replace('~\d+\s*$~',$y-count($J),$F['SelectExpression']);}while($Ch->NextToken);return$J;}$w="simpledb";$ze=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","IS NOT NULL");$Lc=array();$Pc=array("count");$Xb=array(array("json"));}$Pb=array("server"=>"MySQL")+$Pb;if(!defined("DRIVER")){$gf=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
__construct(){parent::init();}function
connect($N="",$V="",$Xe="",$zb=null,$cf=null,$fg=null){mysqli_report(MYSQLI_REPORT_OFF);list($Wc,$cf)=explode(":",$N,2);$J=@$this->real_connect(($N!=""?$Wc:ini_get("mysqli.default_host")),($N.$V!=""?$V:ini_get("mysqli.default_user")),($N.$V.$Xe!=""?$Xe:ini_get("mysqli.default_pw")),$zb,(is_numeric($cf)?$cf:ini_get("mysqli.default_port")),(!is_numeric($cf)?$cf:$fg));return$J;}function
set_charset($Sa){if(parent::set_charset($Sa))return
true;parent::set_charset('utf8');return$this->query("SET NAMES $Sa");}function
result($H,$l=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch_array();return$K[$l];}function
quote($P){return"'".$this->escape_string($P)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$Xe){$this->_link=@mysql_connect(($N!=""?$N:ini_get("mysql.default_host")),("$N$V"!=""?$V:ini_get("mysql.default_user")),("$N$V$Xe"!=""?$Xe:ini_get("mysql.default_password")),true,131072);if($this->_link)$this->server_info=mysql_get_server_info($this->_link);else$this->error=mysql_error();return(bool)$this->_link;}function
set_charset($Sa){if(function_exists('mysql_set_charset')){if(mysql_set_charset($Sa,$this->_link))return
true;mysql_set_charset('utf8',$this->_link);}return$this->query("SET NAMES $Sa");}function
quote($P){return"'".mysql_real_escape_string($P,$this->_link)."'";}function
select_db($zb){return
mysql_select_db($zb,$this->_link);}function
query($H,$dh=false){$I=@($dh?mysql_unbuffered_query($H,$this->_link):mysql_query($H,$this->_link));$this->error="";if(!$I){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($I===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$l=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
mysql_result($I->_result,0,$l);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($I){$this->_result=$I;$this->num_rows=mysql_num_rows($I);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$J=mysql_fetch_field($this->_result,$this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=($J->blob?63:0);return$J;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($N,$V,$Xe){$this->dsn("mysql:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$V,$Xe);return
true;}function
set_charset($Sa){$this->query("SET NAMES $Sa");}function
select_db($zb){return$this->query("USE ".idf_escape($zb));}function
query($H,$dh=false){$this->setAttribute(1000,!$dh);return
parent::query($H,$dh);}}}class
Min_Driver
extends
Min_SQL{function
insert($Q,$O){return($O?parent::insert($Q,$O):queries("INSERT INTO ".table($Q)." ()\nVALUES ()"));}function
insertUpdate($Q,$L,$jf){$e=array_keys(reset($L));$hf="INSERT INTO ".table($Q)." (".implode(", ",$e).") VALUES\n";$sh=array();foreach($e
as$x)$sh[$x]="$x = VALUES($x)";$rg="\nON DUPLICATE KEY UPDATE ".implode(", ",$sh);$sh=array();$Gd=0;foreach($L
as$O){$Y="(".implode(", ",$O).")";if($sh&&(strlen($hf)+$Gd+strlen($Y)+strlen($rg)>1e6)){if(!queries($hf.implode(",\n",$sh).$rg))return
false;$sh=array();$Gd=0;}$sh[]=$Y;$Gd+=strlen($Y)+2;}return
queries($hf.implode(",\n",$sh).$rg);}}function
idf_escape($t){return"`".str_replace("`","``",$t)."`";}function
table($t){return
idf_escape($t);}function
connect(){global$b;$f=new
Min_DB;$vb=$b->credentials();if($f->connect($vb[0],$vb[1],$vb[2])){$f->set_charset(charset($f));$f->query("SET sql_quote_show_create = 1, autocommit = 1");return$f;}$J=$f->error;if(function_exists('iconv')&&!is_utf8($J)&&strlen($Pf=iconv("windows-1250","utf-8",$J))>strlen($J))$J=$Pf;return$J;}function
get_databases($Cc){global$f;$J=get_session("dbs");if($J===null){$H=($f->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$J=($Cc?slow_query($H):get_vals($H));restart_session();set_session("dbs",$J);stop_session();}return$J;}function
limit($H,$Z,$y,$oe=0,$Xf=" "){return" $H$Z".($y!==null?$Xf."LIMIT $y".($oe?" OFFSET $oe":""):"");}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($j,$fb){global$f;$J=null;$h=$f->result("SHOW CREATE DATABASE ".idf_escape($j),1);if(preg_match('~ COLLATE ([^ ]+)~',$h,$A))$J=$A[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$h,$A))$J=$fb[$A[1]][-1];return$J;}function
engines(){$J=array();foreach(get_rows("SHOW ENGINES")as$K){if(preg_match("~YES|DEFAULT~",$K["Support"]))$J[]=$K["Engine"];}return$J;}function
logged_user(){global$f;return$f->result("SELECT USER()");}function
tables_list(){global$f;return
get_key_vals($f->server_info>=5?"SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME":"SHOW TABLES");}function
count_tables($i){$J=array();foreach($i
as$j)$J[$j]=count(get_vals("SHOW TABLES IN ".idf_escape($j)));return$J;}function
table_status($D="",$xc=false){global$f;$J=array();foreach(get_rows($xc&&$f->server_info>=5?"SELECT TABLE_NAME AS Name, Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($D!=""?"AND TABLE_NAME = ".q($D):"ORDER BY Name"):"SHOW TABLE STATUS".($D!=""?" LIKE ".q(addcslashes($D,"%_\\")):""))as$K){if($K["Engine"]=="InnoDB")$K["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$K["Comment"]);if(!isset($K["Engine"]))$K["Comment"]="";if($D!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($R){return$R["Engine"]===null;}function
fk_support($R){global$f;return
preg_match('~InnoDB|IBMDB2I~i',$R["Engine"])||(preg_match('~NDB~i',$R["Engine"])&&version_compare($f->server_info,'5.6')>=0);}function
fields($Q){$J=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($Q))as$K){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$K["Type"],$A);$J[$K["Field"]]=array("field"=>$K["Field"],"full_type"=>$K["Type"],"type"=>$A[1],"length"=>$A[2],"unsigned"=>ltrim($A[3].$A[4]),"default"=>($K["Default"]!=""||preg_match("~char|set~",$A[1])?$K["Default"]:null),"null"=>($K["Null"]=="YES"),"auto_increment"=>($K["Extra"]=="auto_increment"),"on_update"=>(preg_match('~^on update (.+)~i',$K["Extra"],$A)?$A[1]:""),"collation"=>$K["Collation"],"privileges"=>array_flip(preg_split('~, *~',$K["Privileges"])),"comment"=>$K["Comment"],"primary"=>($K["Key"]=="PRI"),);}return$J;}function
indexes($Q,$g=null){$J=array();foreach(get_rows("SHOW INDEX FROM ".table($Q),$g)as$K){$J[$K["Key_name"]]["type"]=($K["Key_name"]=="PRIMARY"?"PRIMARY":($K["Index_type"]=="FULLTEXT"?"FULLTEXT":($K["Non_unique"]?"INDEX":"UNIQUE")));$J[$K["Key_name"]]["columns"][]=$K["Column_name"];$J[$K["Key_name"]]["lengths"][]=$K["Sub_part"];$J[$K["Key_name"]]["descs"][]=null;}return$J;}function
foreign_keys($Q){global$f,$ve;static$Ze='`(?:[^`]|``)+`';$J=array();$tb=$f->result("SHOW CREATE TABLE ".table($Q),1);if($tb){preg_match_all("~CONSTRAINT ($Ze) FOREIGN KEY ?\\(((?:$Ze,? ?)+)\\) REFERENCES ($Ze)(?:\\.($Ze))? \\(((?:$Ze,? ?)+)\\)(?: ON DELETE ($ve))?(?: ON UPDATE ($ve))?~",$tb,$B,PREG_SET_ORDER);foreach($B
as$A){preg_match_all("~$Ze~",$A[2],$gg);preg_match_all("~$Ze~",$A[5],$Cg);$J[idf_unescape($A[1])]=array("db"=>idf_unescape($A[4]!=""?$A[3]:$A[4]),"table"=>idf_unescape($A[4]!=""?$A[4]:$A[3]),"source"=>array_map('idf_unescape',$gg[0]),"target"=>array_map('idf_unescape',$Cg[0]),"on_delete"=>($A[6]?$A[6]:"RESTRICT"),"on_update"=>($A[7]?$A[7]:"RESTRICT"),);}}return$J;}function
view($D){global$f;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$f->result("SHOW CREATE VIEW ".table($D),1)));}function
collations(){$J=array();foreach(get_rows("SHOW COLLATION")as$K){if($K["Default"])$J[$K["Charset"]][-1]=$K["Collation"];else$J[$K["Charset"]][]=$K["Collation"];}ksort($J);foreach($J
as$x=>$X)asort($J[$x]);return$J;}function
information_schema($j){global$f;return($f->server_info>=5&&$j=="information_schema")||($f->server_info>=5.5&&$j=="performance_schema");}function
error(){global$f;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$f->error));}function
create_database($j,$eb){return
queries("CREATE DATABASE ".idf_escape($j).($eb?" COLLATE ".q($eb):""));}function
drop_databases($i){$J=apply_queries("DROP DATABASE",$i,'idf_escape');restart_session();set_session("dbs",null);return$J;}function
rename_database($D,$eb){$J=false;if(create_database($D,$eb)){$Ef=array();foreach(tables_list()as$Q=>$U)$Ef[]=table($Q)." TO ".idf_escape($D).".".table($Q);$J=(!$Ef||queries("RENAME TABLE ".implode(", ",$Ef)));if($J)queries("DROP DATABASE ".idf_escape(DB));restart_session();set_session("dbs",null);}return$J;}function
auto_increment(){$Ea=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$u){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$u["columns"],true)){$Ea="";break;}if($u["type"]=="PRIMARY")$Ea=" UNIQUE";}}return" AUTO_INCREMENT$Ea";}function
alter_table($Q,$D,$m,$Dc,$jb,$fc,$eb,$Da,$Ue){$c=array();foreach($m
as$l)$c[]=($l[1]?($Q!=""?($l[0]!=""?"CHANGE ".idf_escape($l[0]):"ADD"):" ")." ".implode($l[1]).($Q!=""?$l[2]:""):"DROP ".idf_escape($l[0]));$c=array_merge($c,$Dc);$lg=($jb!==null?" COMMENT=".q($jb):"").($fc?" ENGINE=".q($fc):"").($eb?" COLLATE ".q($eb):"").($Da!=""?" AUTO_INCREMENT=$Da":"");if($Q=="")return
queries("CREATE TABLE ".table($D)." (\n".implode(",\n",$c)."\n)$lg$Ue");if($Q!=$D)$c[]="RENAME TO ".table($D);if($lg)$c[]=ltrim($lg);return($c||$Ue?queries("ALTER TABLE ".table($Q)."\n".implode(",\n",$c).$Ue):true);}function
alter_indexes($Q,$c){foreach($c
as$x=>$X)$c[$x]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"")."(".implode(", ",$X[2]).")");return
queries("ALTER TABLE ".table($Q).implode(",",$c));}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($xh){return
queries("DROP VIEW ".implode(", ",array_map('table',$xh)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$xh,$Cg){$Ef=array();foreach(array_merge($S,$xh)as$Q)$Ef[]=table($Q)." TO ".idf_escape($Cg).".".table($Q);return
queries("RENAME TABLE ".implode(", ",$Ef));}function
copy_tables($S,$xh,$Cg){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($S
as$Q){$D=($Cg==DB?table("copy_$Q"):idf_escape($Cg).".".table($Q));if(!queries("\nDROP TABLE IF EXISTS $D")||!queries("CREATE TABLE $D LIKE ".table($Q))||!queries("INSERT INTO $D SELECT * FROM ".table($Q)))return
false;}foreach($xh
as$Q){$D=($Cg==DB?table("copy_$Q"):idf_escape($Cg).".".table($Q));$wh=view($Q);if(!queries("DROP VIEW IF EXISTS $D")||!queries("CREATE VIEW $D AS $wh[select]"))return
false;}return
true;}function
trigger($D){if($D=="")return
array();$L=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($D));return
reset($L);}function
triggers($Q){$J=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_\\")))as$K)$J[$K["Trigger"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($D,$U){global$f,$hc,$ed,$ch;$wa=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$bh="((".implode("|",array_merge(array_keys($ch),$wa)).")\\b(?:\\s*\\(((?:[^'\")]|$hc)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s,]+)['\"]?)?";$Ze="\\s*(".($U=="FUNCTION"?"":$ed).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$bh";$h=$f->result("SHOW CREATE $U ".idf_escape($D),2);preg_match("~\\(((?:$Ze\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$bh\\s+":"")."(.*)~is",$h,$A);$m=array();preg_match_all("~$Ze\\s*,?~is",$A[1],$B,PREG_SET_ORDER);foreach($B
as$Pe){$D=str_replace("``","`",$Pe[2]).$Pe[3];$m[]=array("field"=>$D,"type"=>strtolower($Pe[5]),"length"=>preg_replace_callback("~$hc~s",'normalize_enum',$Pe[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Pe[8] $Pe[7]"))),"null"=>1,"full_type"=>$Pe[4],"inout"=>strtoupper($Pe[1]),"collation"=>strtolower($Pe[9]),);}if($U!="FUNCTION")return
array("fields"=>$m,"definition"=>$A[11]);return
array("fields"=>$m,"returns"=>array("type"=>$A[12],"length"=>$A[13],"unsigned"=>$A[15],"collation"=>$A[16]),"definition"=>$A[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
last_id(){global$f;return$f->result("SELECT LAST_INSERT_ID()");}function
explain($f,$H){return$f->query("EXPLAIN ".($f->server_info>=5.1?"PARTITIONS ":"").$H);}function
found_rows($R,$Z){return($Z||$R["Engine"]!="InnoDB"?null:$R["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Rf){return
true;}function
create_sql($Q,$Da){global$f;$J=$f->result("SHOW CREATE TABLE ".table($Q),1);if(!$Da)$J=preg_replace('~ AUTO_INCREMENT=\\d+~','',$J);return$J;}function
truncate_sql($Q){return"TRUNCATE ".table($Q);}function
use_sql($zb){return"USE ".idf_escape($zb);}function
trigger_sql($Q,$pg){$J="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_\\")),null,"-- ")as$K)$J.="\n".($pg=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($K["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($K["Trigger"])." $K[Timing] $K[Event] ON ".table($K["Table"])." FOR EACH ROW\n$K[Statement];;\n";return$J;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($l){if(preg_match("~binary~",$l["type"]))return"HEX(".idf_escape($l["field"]).")";if($l["type"]=="bit")return"BIN(".idf_escape($l["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$l["type"]))return"AsWKT(".idf_escape($l["field"]).")";}function
unconvert_field($l,$J){if(preg_match("~binary~",$l["type"]))$J="UNHEX($J)";if($l["type"]=="bit")$J="CONV($J, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$l["type"]))$J="GeomFromText($J)";return$J;}function
support($yc){global$f;return!preg_match("~scheme|sequence|type|view_trigger".($f->server_info<5.1?"|event|partitioning".($f->server_info<5?"|routine|trigger|view":""):"")."~",$yc);}function
kill_process($X){return
queries("KILL ".number($X));}function
max_connections(){global$f;return$f->result("SELECT @@max_connections");}$w="sql";$ch=array();$og=array();foreach(array(lang(23)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(24)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(25)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(26)=>array("enum"=>65535,"set"=>64),lang(27)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(28)=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$x=>$X){$ch+=$X;$og[$x]=array_keys($X);}$jh=array("unsigned","zerofill","unsigned zerofill");$ze=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Lc=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$Pc=array("avg","count","count distinct","group_concat","max","min","sum");$Xb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ia="4.2.5";class
Adminer{var$operators;function
name(){return"<a href='/adminer/' id='h1'>Adminer for YYF</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
permanentLogin($h=false){return
password_file($h);}function
bruteForceKey(){return$_SERVER["REMOTE_ADDR"];}function
database(){return
DB;}function
databases($Cc=true){return
get_databases($Cc);}function
schemas(){return
schemas();}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){global$Pb;echo'<table cellspacing="0">
<tr><th>',lang(29),'<td>',html_select("auth[driver]",$Pb,DRIVER),'<tr><th>',lang(30),'<td><input name="auth[server]" value="',h(SERVER),'" title="hostname[:port]" placeholder="localhost" autocapitalize="off">
<tr><th>',lang(31),'<td><input name="auth[username]" id="username" value="',h($_GET["username"])?:'root','" autocapitalize="off">
<tr><th>',lang(32),'<td><input type="password" name="auth[password]">
<tr><th>',lang(33),'<td><input name="auth[db]" value="',h($_GET["db"]),'" autocapitalize="off">
</table>
<script type="text/javascript">
focus(document.getElementById(\'username\'));
</script>
',"<p><input type='submit' value='".lang(34)."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],lang(35))."\n";}function
login($Kd,$Xe){return
true;}function
tableName($vg){return
h($vg["Name"]);}function
fieldName($l,$De=0){return'<span title="'.h($l["full_type"]).'">'.h($l["field"]).'</span>';}function
selectLinks($vg,$O=""){echo'<p class="links">';$Jd=array("select"=>lang(37));if(support("table")||support("indexes"))$Jd["table"]=lang(38);if(support("table")){if(is_view($vg))$Jd["view"]=lang(39);else$Jd["create"]=lang(40);}if($O!==null)$Jd["edit"]=lang(41);foreach($Jd
as$x=>$X)echo" <a href='".h(ME)."$x=".urlencode($vg["Name"]).($x=="edit"?$O:"")."'".bold(isset($_GET[$x])).">$X</a>";echo"\n";}function
foreignKeys($Q){return
foreign_keys($Q);}function
backwardKeys($Q,$ug){return
array();}function
backwardKeysPrint($Ga,$K){}function
selectQuery($H,$Ig){global$w;return"<p><code class='jush-$w'>".h(str_replace("\n"," ",$H))."</code> <span class='time'>($Ig)</span>".(support("sql")?" <a href='".h(ME)."sql=".urlencode($H)."'>".lang(10)."</a>":"")."</p>";}function
rowDescription($Q){return"";}function
rowDescriptions($L,$Ec){return$L;}function
selectLink($X,$l){}function
selectVal($X,$z,$l,$Ke){$J=($X===null?"<i>NULL</i>":(preg_match("~char|binary~",$l["type"])&&!preg_match("~var~",$l["type"])?"<code>$X</code>":$X));if(preg_match('~blob|bytea|raw|file~',$l["type"])&&!is_utf8($X))$J=lang(42,strlen($Ke));return($z?"<a href='".h($z)."'".(is_url($z)?" rel='noreferrer'":"").">$J</a>":$J);}function
editVal($X,$l){return$X;}function
selectColumnsPrint($M,$e){global$Lc,$Pc;print_fieldset("select",lang(43),$M);$r=0;$M[""]=array();foreach($M
as$x=>$X){$X=$_GET["columns"][$x];$d=select_input(" name='columns[$r][col]' onchange='".($x!==""?"selectFieldChange(this.form)":"selectAddRow(this)").";'",$e,$X["col"]);echo"<div>".($Lc||$Pc?"<select name='columns[$r][fun]' onchange='helpClose();".($x!==""?"":" this.nextSibling.nextSibling.onchange();")."'".on_help("getTarget(event).value && getTarget(event).value.replace(/ |\$/, '(') + ')'",1).">".optionlist(array(-1=>"")+array_filter(array(lang(44)=>$Lc,lang(45)=>$Pc)),$X["fun"])."</select>"."($d)":$d)."</div>\n";$r++;}echo"</div></fieldset>\n";}function
selectSearchPrint($Z,$e,$v){print_fieldset("search",lang(46),$Z);foreach($v
as$r=>$u){if($u["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$u["columns"]))."</i>) AGAINST"," <input type='search' name='fulltext[$r]' value='".h($_GET["fulltext"][$r])."' onchange='selectFieldChange(this.form);'>",checkbox("boolean[$r]",1,isset($_GET["boolean"][$r]),"BOOL"),"<br>\n";}}$_GET["where"]=(array)$_GET["where"];reset($_GET["where"]);$Ra="this.nextSibling.onchange();";for($r=0;$r<=count($_GET["where"]);$r++){list(,$X)=each($_GET["where"]);if(!$X||("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators))){echo"<div>".select_input(" name='where[$r][col]' onchange='$Ra'",$e,$X["col"],"(".lang(47).")"),html_select("where[$r][op]",$this->operators,$X["op"],$Ra),"<input type='search' name='where[$r][val]' value='".h($X["val"])."' onchange='".($X?"selectFieldChange(this.form)":"selectAddRow(this)").";' onkeydown='selectSearchKeydown(this, event);' onsearch='selectSearchSearch(this);'></div>\n";}}echo"</div></fieldset>\n";}function
selectOrderPrint($De,$e,$v){print_fieldset("sort",lang(48),$De);$r=0;foreach((array)$_GET["order"]as$x=>$X){if($X!=""){echo"<div>".select_input(" name='order[$r]' onchange='selectFieldChange(this.form);'",$e,$X),checkbox("desc[$r]",1,isset($_GET["desc"][$x]),lang(49))."</div>\n";$r++;}}echo"<div>".select_input(" name='order[$r]' onchange='selectAddRow(this);'",$e),checkbox("desc[$r]",1,false,lang(49))."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($y){echo"<fieldset><legend>".lang(50)."</legend><div>";echo"<input type='number' name='limit' class='size' value='".h($y)."' onchange='selectFieldChange(this.form);'>","</div></fieldset>\n";}function
selectLengthPrint($Hg){if($Hg!==null){echo"<fieldset><legend>".lang(51)."</legend><div>","<input type='number' name='text_length' class='size' value='".h($Hg)."'>","</div></fieldset>\n";}}function
selectActionPrint($v){echo"<fieldset><legend>".lang(52)."</legend><div>","<input type='submit' value='".lang(43)."'>"," <span id='noindex' title='".lang(53)."'></span>","<script type='text/javascript'>\n","var indexColumns = ";$e=array();foreach($v
as$u){if($u["type"]!="FULLTEXT")$e[reset($u["columns"])]=1;}$e[""]=1;foreach($e
as$x=>$X)json_row($x);echo";\n","selectFieldChange(document.getElementById('form'));\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return!information_schema(DB);}function
selectEmailPrint($cc,$e){}function
selectColumnsProcess($e,$v){global$Lc,$Pc;$M=array();$q=array();foreach((array)$_GET["columns"]as$x=>$X){if($X["fun"]=="count"||($X["col"]!=""&&(!$X["fun"]||in_array($X["fun"],$Lc)||in_array($X["fun"],$Pc)))){$M[$x]=apply_sql_function($X["fun"],($X["col"]!=""?idf_escape($X["col"]):"*"));if(!in_array($X["fun"],$Pc))$q[]=$M[$x];}}return
array($M,$q);}function
selectSearchProcess($m,$v){global$f,$w;$J=array();foreach($v
as$r=>$u){if($u["type"]=="FULLTEXT"&&$_GET["fulltext"][$r]!="")$J[]="MATCH (".implode(", ",array_map('idf_escape',$u["columns"])).") AGAINST (".q($_GET["fulltext"][$r]).(isset($_GET["boolean"][$r])?" IN BOOLEAN MODE":"").")";}foreach((array)$_GET["where"]as$X){if("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators)){$mb=" $X[op]";if(preg_match('~IN$~',$X["op"])){$bd=process_length($X["val"]);$mb.=" ".($bd!=""?$bd:"(NULL)");}elseif($X["op"]=="SQL")$mb=" $X[val]";elseif($X["op"]=="LIKE %%")$mb=" LIKE ".$this->processInput($m[$X["col"]],"%$X[val]%");elseif($X["op"]=="ILIKE %%")$mb=" ILIKE ".$this->processInput($m[$X["col"]],"%$X[val]%");elseif(!preg_match('~NULL$~',$X["op"]))$mb.=" ".$this->processInput($m[$X["col"]],$X["val"]);if($X["col"]!="")$J[]=idf_escape($X["col"]).$mb;else{$gb=array();foreach($m
as$D=>$l){$nd=preg_match('~char|text|enum|set~',$l["type"]);if((is_numeric($X["val"])||!preg_match('~(^|[^o])int|float|double|decimal|bit~',$l["type"]))&&(!preg_match("~[\x80-\xFF]~",$X["val"])||$nd)){$D=idf_escape($D);$gb[]=($w=="sql"&&$nd&&!preg_match("~^utf8_~",$l["collation"])?"CONVERT($D USING ".charset($f).")":$D);}}$J[]=($gb?"(".implode("$mb OR ",$gb)."$mb)":"0");}}}return$J;}function
selectOrderProcess($m,$v){$J=array();foreach((array)$_GET["order"]as$x=>$X){if($X!="")$J[]=(preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$X)?$X:idf_escape($X)).(isset($_GET["desc"][$x])?" DESC":"");}return$J;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($Z,$Ec){return
false;}function
selectQueryBuild($M,$Z,$q,$De,$y,$E){return"";}function
messageQuery($H,$Ig){global$w;restart_session();$Uc=&get_session("queries");$s="sql-".count($Uc[$_GET["db"]]);if(strlen($H)>1e6)$H=preg_replace('~[\x80-\xFF]+$~','',substr($H,0,1e6))."\n...";$Uc[$_GET["db"]][]=array($H,time(),$Ig);return" <span class='time'>".@date("H:i:s")."</span> <a href='#$s' onclick=\"return !toggle('$s');\">".lang(54)."</a>"."<div id='$s' class='hidden'><pre><code class='jush-$w'>".shorten_utf8($H,1000).'</code></pre>'.($Ig?" <span class='time'>($Ig)</span>":'').(support("sql")?'<p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($Uc[$_GET["db"]])-1)).'">'.lang(10).'</a>':'').'</div>';}function
editFunctions($l){global$Xb;$J=($l["null"]?"NULL/":"");foreach($Xb
as$x=>$Lc){if(!$x||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($Lc
as$Ze=>$X){if(!$Ze||preg_match("~$Ze~",$l["type"]))$J.="/$X";}if($x&&!preg_match('~set|blob|bytea|raw|file~',$l["type"]))$J.="/SQL";}}if($l["auto_increment"]&&!isset($_GET["select"])&&!where($_GET))$J=lang(55);return
explode("/",$J);}function
editInput($Q,$l,$Ba,$Y){if($l["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$Ba value='-1' checked><i>".lang(8)."</i></label> ":"").($l["null"]?"<label><input type='radio'$Ba value=''".($Y!==null||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$Ba,$l,$Y,0);return"";}function
processInput($l,$Y,$p=""){if($p=="SQL")return$Y;$D=$l["field"];$J=q($Y);if(preg_match('~^(now|getdate|uuid)$~',$p))$J="$p()";elseif(preg_match('~^current_(date|timestamp)$~',$p))$J=$p;elseif(preg_match('~^([+-]|\\|\\|)$~',$p))$J=idf_escape($D)." $p $J";elseif(preg_match('~^[+-] interval$~',$p))$J=idf_escape($D)." $p ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$Y)?$Y:$J);elseif(preg_match('~^(addtime|subtime|concat)$~',$p))$J="$p(".idf_escape($D).", $J)";elseif(preg_match('~^(md5|sha1|password|encrypt)$~',$p))$J="$p($J)";return
unconvert_field($l,$J);}function
dumpOutput(){$J=array('text'=>lang(56),'file'=>lang(57));if(function_exists('gzencode'))$J['gz']='gzip';return$J;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($j){}function
dumpTable($Q,$pg,$od=0){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($pg)dump_csv(array_keys(fields($Q)));}else{if($od==2){$m=array();foreach(fields($Q)as$D=>$l)$m[]=idf_escape($D)." $l[full_type]";$h="CREATE TABLE ".table($Q)." (".implode(", ",$m).")";}else$h=create_sql($Q,$_POST["auto_increment"]);set_utf8mb4($h);if($pg&&$h){if($pg=="DROP+CREATE"||$od==1)echo"DROP ".($od==2?"VIEW":"TABLE")." IF EXISTS ".table($Q).";\n";if($od==1)$h=remove_definer($h);echo"$h;\n\n";}}}function
dumpData($Q,$pg,$H){global$f,$w;$Nd=($w=="sqlite"?0:1048576);if($pg){if($_POST["format"]=="sql"){if($pg=="TRUNCATE+INSERT")echo
truncate_sql($Q).";\n";$m=fields($Q);}$I=$f->query($H,1);if($I){$gd="";$Pa="";$vd=array();$rg="";$zc=($Q!=''?'fetch_assoc':'fetch_row');while($K=$I->$zc()){if(!$vd){$sh=array();foreach($K
as$X){$l=$I->fetch_field();$vd[]=$l->name;$x=idf_escape($l->name);$sh[]="$x = VALUES($x)";}$rg=($pg=="INSERT+UPDATE"?"\nON DUPLICATE KEY UPDATE ".implode(", ",$sh):"").";\n";}if($_POST["format"]!="sql"){if($pg=="table"){dump_csv($vd);$pg="INSERT";}dump_csv($K);}else{if(!$gd)$gd="INSERT INTO ".table($Q)." (".implode(", ",array_map('idf_escape',$vd)).") VALUES";foreach($K
as$x=>$X){$l=$m[$x];$K[$x]=($X!==null?unconvert_field($l,preg_match('~(^|[^o])int|float|double|decimal~',$l["type"])&&$X!=''?$X:q($X)):"NULL");}$Pf=($Nd?"\n":" ")."(".implode(",\t",$K).")";if(!$Pa)$Pa=$gd.$Pf;elseif(strlen($Pa)+4+strlen($Pf)+strlen($rg)<$Nd)$Pa.=",$Pf";else{echo$Pa.$rg;$Pa=$gd.$Pf;}}}if($Pa)echo$Pa.$rg;}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",$f->error)."\n";}}function
dumpFilename($Yc){return
friendly_url($Yc!=""?$Yc:(SERVER!=""?SERVER:"localhost"));}function
dumpHeaders($Yc,$be=false){$Ne=$_POST["output"];$tc=(preg_match('~sql~',$_POST["format"])?"sql":($be?"tar":"csv"));header("Content-Type: ".($Ne=="gz"?"application/x-gzip":($tc=="tar"?"application/x-tar":($tc=="sql"||$Ne!="file"?"text/plain":"text/csv")."; charset=utf-8")));if($Ne=="gz")ob_start('ob_gzencode',1e6);return$tc;}function
homepage(){echo'<p class="links">'.($_GET["ns"]==""&&support("database")?'<a href="'.h(ME).'database=">'.lang(58)."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?lang(59):lang(60))."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.lang(61)."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".lang(62)."</a>\n":"");return
true;}function
navigation($ae){global$ia,$w,$Pb,$f;echo'<h1>
',$this->name(),' <span class="version">(',$ia,')</span>
<a href="https://www.adminer.org/#download" target="_blank" id="version">',(version_compare($ia,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($ae=="auth"){$Bc=true;foreach((array)$_SESSION["pwds"]as$uh=>$bg){foreach($bg
as$N=>$qh){foreach($qh
as$V=>$Xe){if($Xe!==null){if($Bc){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Bc=false;}$Bb=$_SESSION["db"][$uh][$N][$V];foreach(($Bb?array_keys($Bb):array(""))as$j)echo"<a href='".h(auth_url($uh,$N,$V,$j))."'>($Pb[$uh]) ".h($V.($N!=""?"@$N":"").($j!=""?" - $j":""))."</a><br>\n";}}}}}else{if($_GET["ns"]!==""&&!$ae&&DB!=""){$f->select_db(DB);$S=table_status('',true);}if(support("sql")){echo'<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=jush.js&amp;version=4.2.5",'"></script>
<script type="text/javascript">
';if($S){$Jd=array();foreach($S
as$Q=>$U)$Jd[]=preg_quote($Q,'/');echo"var jushLinks = { $w: [ '".js_escape(ME).(support("table")?"table=":"select=")."\$&', /\\b(".implode("|",$Jd).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$X)echo"jushLinks.$X = jushLinks.$w;\n";}echo'bodyLoad(\'',(is_object($f)?substr($f->server_info,0,3):""),'\');
</script>
';}$this->databasesPrint($ae);if(DB==""||!$ae){echo"<p class='links'>".(support("sql")?"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])&&!isset($_GET["import"])).">".lang(54)."</a>\n<a href='".h(ME)."import='".bold(isset($_GET["import"])).">".lang(63)."</a>\n":"")."";if(support("dump"))echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".lang(64)."</a>\n";}if($_GET["ns"]!==""&&!$ae&&DB!=""){echo'<a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".lang(65)."</a>\n";if(!$S)echo"<p class='message'>".lang(9)."\n";else$this->tablesPrint($S);}}}function
databasesPrint($ae){global$b,$f;$i=$this->databases();echo'<form action="">
<p id="dbs">
';hidden_fields_get();$_b=" onmousedown='dbMouseDown(event, this);' onchange='dbChange(this);'";echo"<span title='".lang(66)."'>DB</span>: ".($i?"<select name='db'$_b>".optionlist(array(""=>"")+$i,DB)."</select>":'<input name="db" value="'.h(DB).'" autocapitalize="off">'),"<input type='submit' value='".lang(20)."'".($i?" class='hidden'":"").">\n";if($ae!="db"&&DB!=""&&$f->select_db(DB)){if(support("scheme")){echo"<br>".lang(67).": <select name='ns'$_b>".optionlist(array(""=>"")+$b->schemas(),$_GET["ns"])."</select>";if($_GET["ns"]!="")set_schema($_GET["ns"]);}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':(isset($_GET["privileges"])?'<input type="hidden" name="privileges" value="">':"")))),"</p></form>\n";}function
tablesPrint($S){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($S
as$Q=>$lg){echo'<a href="'.h(ME).'select='.urlencode($Q).'"'.bold($_GET["select"]==$Q||$_GET["edit"]==$Q,"select").">".lang(68)."</a> ";$D=$this->tableName($lg);echo(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($Q).'"'.bold(in_array($Q,array($_GET["table"],$_GET["create"],$_GET["indexes"],$_GET["foreign"],$_GET["trigger"])),(is_view($lg)?"view":""),"structure")." title='".lang(38)."'>$D</a>":"<span>$D</span>")."<br>\n";}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);if($b->operators===null)$b->operators=$ze;function
page_header($Lg,$k="",$Oa=array(),$Mg=""){global$ca,$ia,$b,$Pb,$w;page_headers();if(is_ajax()&&$k){page_messages($k);exit;}$Ng=$Lg.($Mg!=""?": $Mg":"");$Og=strip_tags($Ng.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="',$ca,'" dir="',lang(69),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<meta name="referrer" content="origin-when-crossorigin">
<title>',$Og,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=4.2.5",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=4.2.5",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.2.5",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.2.5",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="',lang(69),' nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);"',(isset($_COOKIE["adminer_version"])?"":" onload=\"verifyVersion('$ia');\"");?>>
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, ' js');
var offlineMessage = '<?php echo
js_escape(lang(70)),'\';
</script>

<div id="help" class="jush-',$w,' jsonly hidden" onmouseover="helpOpen = 1;" onmouseout="helpMouseout(this, event);"></div>

<div id="content">
';if($Oa!==null){$z=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($z?$z:".").'">'.$Pb[DRIVER].'</a> &raquo; ';$z=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$N=(SERVER!=""?h(SERVER):lang(30));if($Oa===false)echo"$N\n";else{echo"<a href='".($z?h($z):".")."' accesskey='1' title='Alt+Shift+1'>$N</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Oa)))echo'<a href="'.h($z."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Oa)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Oa
as$x=>$X){$Gb=(is_array($X)?$X[1]:h($X));if($Gb!="")echo"<a href='".h(ME."$x=").urlencode(is_array($X)?$X[0]:$X)."'>$Gb</a> &raquo; ";}}echo"$Lg\n";}}echo"<h2>$Ng</h2>\n","<div id='ajaxstatus' class='jsonly hidden'></div>\n";restart_session();page_messages($k);$i=&get_session("dbs");if(DB!=""&&$i&&!in_array(DB,$i,true))$i=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}}function
page_messages($k){$lh=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Wd=$_SESSION["messages"][$lh];if($Wd){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Wd)."</div>\n";unset($_SESSION["messages"][$lh]);}if($k)echo"<div class='error'>$k</div>\n";}function
page_footer($ae=""){global$b,$T;echo'</div>

';switch_lang();if($ae!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="',lang(71),'" id="logout">
<input type="hidden" name="token" value="',$T,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($ae);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($de){while($de>=2147483648)$de-=4294967296;while($de<=-2147483649)$de+=4294967296;return(int)$de;}function
long2str($W,$zh){$Pf='';foreach($W
as$X)$Pf.=pack('V',$X);if($zh)return
substr($Pf,0,end($W));return$Pf;}function
str2long($Pf,$zh){$W=array_values(unpack('V*',str_pad($Pf,4*ceil(strlen($Pf)/4),"\0")));if($zh)$W[]=strlen($Pf);return$W;}function
xxtea_mx($Eh,$Dh,$sg,$rd){return
int32((($Eh>>5&0x7FFFFFF)^$Dh<<2)+(($Dh>>3&0x1FFFFFFF)^$Eh<<4))^int32(($sg^$Dh)+($rd^$Eh));}function
encrypt_string($ng,$x){if($ng=="")return"";$x=array_values(unpack("V*",pack("H*",md5($x))));$W=str2long($ng,true);$de=count($W)-1;$Eh=$W[$de];$Dh=$W[0];$G=floor(6+52/($de+1));$sg=0;while($G-->0){$sg=int32($sg+0x9E3779B9);$Wb=$sg>>2&3;for($Oe=0;$Oe<$de;$Oe++){$Dh=$W[$Oe+1];$ce=xxtea_mx($Eh,$Dh,$sg,$x[$Oe&3^$Wb]);$Eh=int32($W[$Oe]+$ce);$W[$Oe]=$Eh;}$Dh=$W[0];$ce=xxtea_mx($Eh,$Dh,$sg,$x[$Oe&3^$Wb]);$Eh=int32($W[$de]+$ce);$W[$de]=$Eh;}return
long2str($W,false);}function
decrypt_string($ng,$x){if($ng=="")return"";if(!$x)return
false;$x=array_values(unpack("V*",pack("H*",md5($x))));$W=str2long($ng,false);$de=count($W)-1;$Eh=$W[$de];$Dh=$W[0];$G=floor(6+52/($de+1));$sg=int32($G*0x9E3779B9);while($sg){$Wb=$sg>>2&3;for($Oe=$de;$Oe>0;$Oe--){$Eh=$W[$Oe-1];$ce=xxtea_mx($Eh,$Dh,$sg,$x[$Oe&3^$Wb]);$Dh=int32($W[$Oe]-$ce);$W[$Oe]=$Dh;}$Eh=$W[$de];$ce=xxtea_mx($Eh,$Dh,$sg,$x[$Oe&3^$Wb]);$Dh=int32($W[0]-$ce);$W[0]=$Dh;$sg=int32($sg-0x9E3779B9);}return
long2str($W,true);}$f='';$Tc=$_SESSION["token"];if(!$Tc)$_SESSION["token"]=rand(1,1e6);$T=get_token();$af=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($x)=explode(":",$X);$af[$x]=$X;}}function
add_invalid_login(){global$b;$n=get_temp_dir()."/adminer.invalid";$Jc=@fopen($n,"r+");if(!$Jc){$Jc=@fopen($n,"w");if(!$Jc)return;}flock($Jc,LOCK_EX);$jd=unserialize(stream_get_contents($Jc));$Ig=time();if($jd){foreach($jd
as$kd=>$X){if($X[0]<$Ig)unset($jd[$kd]);}}$id=&$jd[$b->bruteForceKey()];if(!$id)$id=array($Ig+30*60,0);$id[1]++;$Zf=serialize($jd);rewind($Jc);fwrite($Jc,$Zf);ftruncate($Jc,strlen($Zf));flock($Jc,LOCK_UN);fclose($Jc);}$Ca=$_POST["auth"];if($Ca){$jd=unserialize(@file_get_contents(get_temp_dir()."/adminer.invalid"));$id=$jd[$b->bruteForceKey()];$je=($id[1]>30?$id[0]-time():0);if($je>0)auth_error(lang(72,ceil($je/60)));session_regenerate_id();$uh=$Ca["driver"];$N=$Ca["server"];$V=$Ca["username"];$Xe=(string)$Ca["password"];$j=$Ca["db"];set_password($uh,$N,$V,$Xe);$_SESSION["db"][$uh][$N][$V][$j]=true;if($Ca["permanent"]){$x=base64_encode($uh)."-".base64_encode($N)."-".base64_encode($V)."-".base64_encode($j);$mf=$b->permanentLogin(true);$af[$x]="$x:".base64_encode($mf?encrypt_string($Xe,$mf):"");cookie("adminer_permanent",implode(" ",$af));}if(count($_POST)==1||DRIVER!=$uh||SERVER!=$N||$_GET["username"]!==$V||DB!=$j)redirect(auth_url($uh,$N,$V,$j));}elseif($_POST["logout"]){if($Tc&&!verify_token()){page_header(lang(71),lang(73));page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$x)set_session($x,null);unset_permanent();redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),lang(74));}}elseif($af&&!$_SESSION["pwds"]){session_regenerate_id();$mf=$b->permanentLogin();foreach($af
as$x=>$X){list(,$Ya)=explode(":",$X);list($uh,$N,$V,$j)=array_map('base64_decode',explode("-",$x));set_password($uh,$N,$V,decrypt_string(base64_decode($Ya),$mf));$_SESSION["db"][$uh][$N][$V][$j]=true;}}function
unset_permanent(){global$af;foreach($af
as$x=>$X){list($uh,$N,$V,$j)=array_map('base64_decode',explode("-",$x));if($uh==DRIVER&&$N==SERVER&&$V==$_GET["username"]&&$j==DB)unset($af[$x]);}cookie("adminer_permanent",implode(" ",$af));}function
auth_error($k){global$b,$Tc;$k=h($k);$cg=session_name();if(isset($_GET["username"])){header("HTTP/1.1 403 Forbidden");if(($_COOKIE[$cg]||$_GET[$cg])&&!$Tc)$k=lang(75);else{add_invalid_login();$Xe=get_password();if($Xe!==null){if($Xe===false)$k.='<br>'.lang(76,'<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}if(!$_COOKIE[$cg]&&$_GET[$cg]&&ini_bool("session.use_only_cookies"))$k=lang(77);$F=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$F["lifetime"]);page_header(lang(34),$k,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");exit;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header(lang(78),lang(79,implode(", ",$gf)),false);page_footer("auth");exit;}$f=connect();}$Ob=new
Min_Driver($f);if(!is_object($f)||($Kd=$b->login($_GET["username"],get_password()))!==true)auth_error((is_string($f)?$f:(is_string($Kd)?$Kd:lang(80))));if($Ca&&$_POST["token"])$_POST["token"]=$T;$k='';if($_POST){if(!verify_token()){$dd="max_input_vars";$Rd=ini_get($dd);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$x){$X=ini_get($x);if($X&&(!$Rd||$X<$Rd)){$dd=$x;$Rd=$X;}}}$k=(!$_POST["token"]&&$Rd?lang(81,"'$dd'"):lang(73).' '.lang(82));}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$k=lang(83,"'post_max_size'");if(isset($_GET["sql"]))$k.=' '.lang(84);}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();function
select($I,$g=null,$Ge=array(),$y=0){global$w;$Jd=array();$v=array();$e=array();$La=array();$ch=array();$J=array();odd('');for($r=0;(!$y||$r<$y)&&($K=$I->fetch_row());$r++){if(!$r){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($qd=0;$qd<count($K);$qd++){$l=$I->fetch_field();$D=$l->name;$Fe=$l->orgtable;$Ee=$l->orgname;$J[$l->table]=$Fe;if($Ge&&$w=="sql")$Jd[$qd]=($D=="table"?"table=":($D=="possible_keys"?"indexes=":null));elseif($Fe!=""){if(!isset($v[$Fe])){$v[$Fe]=array();foreach(indexes($Fe,$g)as$u){if($u["type"]=="PRIMARY"){$v[$Fe]=array_flip($u["columns"]);break;}}$e[$Fe]=$v[$Fe];}if(isset($e[$Fe][$Ee])){unset($e[$Fe][$Ee]);$v[$Fe][$Ee]=$qd;$Jd[$qd]=$Fe;}}if($l->charsetnr==63)$La[$qd]=true;$ch[$qd]=$l->type;echo"<th".($Fe!=""||$l->name!=$Ee?" title='".h(($Fe!=""?"$Fe.":"").$Ee)."'":"").">".h($D).($Ge?doc_link(array('sql'=>"explain-output.html#explain_".strtolower($D))):"");}echo"</thead>\n";}echo"<tr".odd().">";foreach($K
as$x=>$X){if($X===null)$X="<i>NULL</i>";elseif($La[$x]&&!is_utf8($X))$X="<i>".lang(42,strlen($X))."</i>";elseif(!strlen($X))$X="&nbsp;";else{$X=h($X);if($ch[$x]==254)$X="<code>$X</code>";}if(isset($Jd[$x])&&!$e[$Jd[$x]]){if($Ge&&$w=="sql"){$Q=$K[array_search("table=",$Jd)];$z=$Jd[$x].urlencode($Ge[$Q]!=""?$Ge[$Q]:$Q);}else{$z="edit=".urlencode($Jd[$x]);foreach($v[$Jd[$x]]as$cb=>$qd)$z.="&where".urlencode("[".bracket_escape($cb)."]")."=".urlencode($K[$qd]);}$X="<a href='".h(ME.$z)."'>$X</a>";}echo"<td>$X";}}echo($r?"</table>":"<p class='message'>".lang(12))."\n";return$J;}function
referencable_primary($Wf){$J=array();foreach(table_status('',true)as$wg=>$Q){if($wg!=$Wf&&fk_support($Q)){foreach(fields($wg)as$l){if($l["primary"]){if($J[$wg]){unset($J[$wg]);break;}$J[$wg]=$l;}}}}return$J;}function
textarea($D,$Y,$L=10,$gb=80){global$w;echo"<textarea name='$D' rows='$L' cols='$gb' class='sqlarea jush-$w' spellcheck='false' wrap='off'>";if(is_array($Y)){foreach($Y
as$X)echo
h($X[0])."\n\n\n";}else
echo
h($Y);echo"</textarea>";}function
edit_type($x,$l,$fb,$Fc=array()){global$og,$ch,$jh,$ve;$U=$l["type"];echo'<td><select name="',h($x),'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);"',on_help("getTarget(event).value",1),'>';if($U&&!isset($ch[$U])&&!isset($Fc[$U]))array_unshift($og,$U);if($Fc)$og[lang(85)]=$Fc;echo
optionlist($og,$U),'</select>
<td><input name="',h($x),'[length]" value="',h($l["length"]),'" size="3" onfocus="editingLengthFocus(this);"',(!$l["length"]&&preg_match('~var(char|binary)$~',$U)?" class='required'":""),' onchange="editingLengthChange(this);" onkeyup="this.onchange();"><td class="options">';echo"<select name='".h($x)."[collation]'".(preg_match('~(char|text|enum|set)$~',$U)?"":" class='hidden'").'><option value="">('.lang(86).')'.optionlist($fb,$l["collation"]).'</select>',($jh?"<select name='".h($x)."[unsigned]'".(!$U||preg_match('~((^|[^o])int|float|double|decimal)$~',$U)?"":" class='hidden'").'><option>'.optionlist($jh,$l["unsigned"]).'</select>':''),(isset($l['on_update'])?"<select name='".h($x)."[on_update]'".(preg_match('~timestamp|datetime~',$U)?"":" class='hidden'").'>'.optionlist(array(""=>"(".lang(87).")","CURRENT_TIMESTAMP"),$l["on_update"]).'</select>':''),($Fc?"<select name='".h($x)."[on_delete]'".(preg_match("~`~",$U)?"":" class='hidden'")."><option value=''>(".lang(88).")".optionlist(explode("|",$ve),$l["on_delete"])."</select> ":" ");}function
process_length($Gd){global$hc;return(preg_match("~^\\s*\\(?\\s*$hc(?:\\s*,\\s*$hc)*+\\s*\\)?\\s*\$~",$Gd)&&preg_match_all("~$hc~",$Gd,$B)?"(".implode(",",$B[0]).")":preg_replace('~^[0-9].*~','(\0)',preg_replace('~[^-0-9,+()[\]]~','',$Gd)));}function
process_type($l,$db="COLLATE"){global$jh;return" $l[type]".process_length($l["length"]).(preg_match('~(^|[^o])int|float|double|decimal~',$l["type"])&&in_array($l["unsigned"],$jh)?" $l[unsigned]":"").(preg_match('~char|text|enum|set~',$l["type"])&&$l["collation"]?" $db ".q($l["collation"]):"");}function
process_field($l,$ah){global$w;$Db=$l["default"];return
array(idf_escape(trim($l["field"])),process_type($ah),($l["null"]?" NULL":" NOT NULL"),(isset($Db)?" DEFAULT ".((preg_match('~time~',$l["type"])&&preg_match('~^CURRENT_TIMESTAMP$~i',$Db))||($w=="sqlite"&&preg_match('~^CURRENT_(TIME|TIMESTAMP|DATE)$~i',$Db))||($l["type"]=="bit"&&preg_match("~^([0-9]+|b'[0-1]+')\$~",$Db))||($w=="pgsql"&&preg_match("~^[a-z]+\\(('[^']*')+\\)\$~",$Db))?$Db:q($Db)):""),(preg_match('~timestamp|datetime~',$l["type"])&&$l["on_update"]?" ON UPDATE $l[on_update]":""),(support("comment")&&$l["comment"]!=""?" COMMENT ".q($l["comment"]):""),($l["auto_increment"]?auto_increment():null),);}function
type_class($U){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$x=>$X){if(preg_match("~$x|$X~",$U))return" class='$x'";}}function
edit_fields($m,$fb,$U="TABLE",$Fc=array(),$kb=false){global$f,$ed;$m=array_values($m);echo'<thead><tr class="wrap">
';if($U=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($U=="TABLE"?lang(89):lang(90)),'<td>',lang(91),'<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>',lang(92),'<td>',lang(93);if($U=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="',lang(55),'">AI</acronym>',doc_link(array('sql'=>"example-auto-increment.html",'sqlite'=>"autoinc.html",'pgsql'=>"datatype.html#DATATYPE-SERIAL",'mssql'=>"ms186775.aspx",)),'<td>',lang(94),(support("comment")?"<td".($kb?"":" class='hidden'").">".lang(95):"");}echo'<td>',"<input type='image' class='icon' name='add[".(support("move_col")?0:count($m))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.2.5' alt='+' title='".lang(96)."'>",'<script type="text/javascript">row_count = ',count($m),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($m
as$r=>$l){$r++;$He=$l[($_POST?"orig":"field")];$Kb=(isset($_POST["add"][$r-1])||(isset($l["field"])&&!$_POST["drop_col"][$r]))&&(support("drop_col")||$He=="");echo'<tr',($Kb?"":" style='display: none;'"),'>
',($U=="PROCEDURE"?"<td>".html_select("fields[$r][inout]",explode("|",$ed),$l["inout"]):""),'<th>';if($Kb){echo'<input name="fields[',$r,'][field]" value="',h($l["field"]),'" onchange="editingNameChange(this);',($l["field"]!=""||count($m)>1?'':' editingAddRow(this);" onkeyup="if (this.value) editingAddRow(this);'),'" maxlength="64" autocapitalize="off">';}echo'<input type="hidden" name="fields[',$r,'][orig]" value="',h($He),'">
';edit_type("fields[$r]",$l,$fb,$Fc);if($U=="TABLE"){echo'<td>',checkbox("fields[$r][null]",1,$l["null"],"","","block"),'<td><label class="block"><input type="radio" name="auto_increment_col" value="',$r,'"';if($l["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }"></label><td><?php
echo
checkbox("fields[$r][has_default]",1,$l["has_default"]),'<input name="fields[',$r,'][default]" value="',h($l["default"]),'" onkeyup="keyupChange.call(this);" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($kb?"":" class='hidden'")."><input name='fields[$r][comment]' value='".h($l["comment"])."' maxlength='".($f->server_info>=5.5?1024:255)."'>":"");}echo"<td>",(support("move_col")?"<input type='image' class='icon' name='add[$r]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.2.5' alt='+' title='".lang(96)."' onclick='return !editingAddRow(this, 1);'>&nbsp;"."<input type='image' class='icon' name='up[$r]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=4.2.5' alt='^' title='".lang(97)."'>&nbsp;"."<input type='image' class='icon' name='down[$r]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=4.2.5' alt='v' title='".lang(98)."'>&nbsp;":""),($He==""||support("drop_col")?"<input type='image' class='icon' name='drop_col[$r]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.2.5' alt='x' title='".lang(99)."' onclick=\"return !editingRemoveRow(this, 'fields\$1[field]');\">":""),"\n";}}function
process_fields(&$m){ksort($m);$oe=0;if($_POST["up"]){$Ad=0;foreach($m
as$x=>$l){if(key($_POST["up"])==$x){unset($m[$x]);array_splice($m,$Ad,0,array($l));break;}if(isset($l["field"]))$Ad=$oe;$oe++;}}elseif($_POST["down"]){$Hc=false;foreach($m
as$x=>$l){if(isset($l["field"])&&$Hc){unset($m[key($_POST["down"])]);array_splice($m,$oe,0,array($Hc));break;}if(key($_POST["down"])==$x)$Hc=$l;$oe++;}}elseif($_POST["add"]){$m=array_values($m);array_splice($m,key($_POST["add"]),0,array(array()));}elseif(!$_POST["drop_col"])return
false;return
true;}function
normalize_enum($A){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($A[0][0].$A[0][0],$A[0][0],substr($A[0],1,-1))),'\\'))."'";}function
grant($Mc,$of,$e,$ue){if(!$of)return
true;if($of==array("ALL PRIVILEGES","GRANT OPTION"))return($Mc=="GRANT"?queries("$Mc ALL PRIVILEGES$ue WITH GRANT OPTION"):queries("$Mc ALL PRIVILEGES$ue")&&queries("$Mc GRANT OPTION$ue"));return
queries("$Mc ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$e, ",$of).$e).$ue);}function
drop_create($Qb,$h,$Rb,$Fg,$Tb,$_,$Vd,$Td,$Ud,$re,$ge){if($_POST["drop"])query_redirect($Qb,$_,$Vd);elseif($re=="")query_redirect($h,$_,$Ud);elseif($re!=$ge){$ub=queries($h);queries_redirect($_,$Td,$ub&&queries($Qb));if($ub)queries($Rb);}else
queries_redirect($_,$Td,queries($Fg)&&queries($Tb)&&queries($Qb)&&queries($h));}function
create_trigger($ue,$K){global$w;$Kg=" $K[Timing] $K[Event]".($K["Event"]=="UPDATE OF"?" ".idf_escape($K["Of"]):"");return"CREATE TRIGGER ".idf_escape($K["Trigger"]).($w=="mssql"?$ue.$Kg:$Kg.$ue).rtrim(" $K[Type]\n$K[Statement]",";").";";}function
create_routine($Lf,$K){global$ed;$O=array();$m=(array)$K["fields"];ksort($m);foreach($m
as$l){if($l["field"]!="")$O[]=(preg_match("~^($ed)\$~",$l["inout"])?"$l[inout] ":"").idf_escape($l["field"]).process_type($l,"CHARACTER SET");}return"CREATE $Lf ".idf_escape(trim($K["name"]))." (".implode(", ",$O).")".(isset($_GET["function"])?" RETURNS".process_type($K["returns"],"CHARACTER SET"):"").($K["language"]?" LANGUAGE $K[language]":"").rtrim("\n$K[definition]",";").";";}function
remove_definer($H){return
preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$H);}function
format_foreign_key($o){global$ve;return" FOREIGN KEY (".implode(", ",array_map('idf_escape',$o["source"])).") REFERENCES ".table($o["table"])." (".implode(", ",array_map('idf_escape',$o["target"])).")".(preg_match("~^($ve)\$~",$o["on_delete"])?" ON DELETE $o[on_delete]":"").(preg_match("~^($ve)\$~",$o["on_update"])?" ON UPDATE $o[on_update]":"");}function
tar_file($n,$Pg){$J=pack("a100a8a8a8a12a12",$n,644,0,0,decoct($Pg->size),decoct(time()));$Wa=8*32;for($r=0;$r<strlen($J);$r++)$Wa+=ord($J[$r]);$J.=sprintf("%06o",$Wa)."\0 ";echo$J,str_repeat("\0",512-strlen($J));$Pg->send();echo
str_repeat("\0",511-($Pg->size+511)%512);}function
ini_bytes($dd){$X=ini_get($dd);switch(strtolower(substr($X,-1))){case'g':$X*=1024;case'm':$X*=1024;case'k':$X*=1024;}return$X;}function
doc_link($Ye){global$w,$f;$mh=array('sql'=>"http://dev.mysql.com/doc/refman/".substr($f->server_info,0,3)."/en/",'sqlite'=>"http://www.sqlite.org/",'pgsql'=>"http://www.postgresql.org/docs/".substr($f->server_info,0,3)."/static/",'mssql'=>"http://msdn.microsoft.com/library/",'oracle'=>"http://download.oracle.com/docs/cd/B19306_01/server.102/b14200/",);return($Ye[$w]?"<a href='$mh[$w]$Ye[$w]' target='_blank' rel='noreferrer'><sup>?</sup></a>":"");}function
ob_gzencode($P){return
gzencode($P);}function
db_size($j){global$f;if(!$f->select_db($j))return"?";$J=0;foreach(table_status()as$R)$J+=$R["Data_length"]+$R["Index_length"];return
format_number($J);}function
set_utf8mb4($h){global$f;static$O=false;if(!$O&&preg_match('~\butf8mb4~i',$h)){$O=true;echo"SET NAMES ".charset($f).";\n\n";}}function
connect_error(){global$b,$f,$T,$k,$Pb;if(DB!=""){header("HTTP/1.1 404 Not Found");page_header(lang(33).": ".h(DB),lang(100),true);}else{if($_POST["db"]&&!$k)queries_redirect(substr(ME,0,-1),lang(101),drop_databases($_POST["db"]));page_header(lang(102),$k,false);echo"<p class='links'>\n";foreach(array('database'=>lang(103),'privileges'=>lang(62),'processlist'=>lang(104),'variables'=>lang(105),'status'=>lang(106),)as$x=>$X){if(support($x))echo"<a href='".h(ME)."$x='>$X</a>\n";}echo"<p>".lang(107,$Pb[DRIVER],"<b>".h($f->server_info)."</b>","<b>$f->extension</b>")."\n","<p>".lang(108,"<b>".h(logged_user())."</b>")."\n";$i=$b->databases();if($i){$Sf=support("scheme");$fb=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n","<thead><tr>".(support("database")?"<td>&nbsp;":"")."<th>".lang(33)." - <a href='".h(ME)."refresh=1'>".lang(109)."</a>"."<td>".lang(110)."<td>".lang(111)."<td>".lang(112)." - <a href='".h(ME)."dbsize=1' onclick=\"return !ajaxSetHtml('".h(js_escape(ME))."script=connect');\">".lang(113)."</a>"."</thead>\n";$i=($_GET["dbsize"]?count_tables($i):array_flip($i));foreach($i
as$j=>$S){$Kf=h(ME)."db=".urlencode($j);echo"<tr".odd().">".(support("database")?"<td>".checkbox("db[]",$j,in_array($j,(array)$_POST["db"])):""),"<th><a href='$Kf'>".h($j)."</a>";$eb=nbsp(db_collation($j,$fb));echo"<td>".(support("database")?"<a href='$Kf".($Sf?"&amp;ns=":"")."&amp;database=' title='".lang(58)."'>$eb</a>":$eb),"<td align='right'><a href='$Kf&amp;schema=' id='tables-".h($j)."' title='".lang(61)."'>".($_GET["dbsize"]?$S:"?")."</a>","<td align='right' id='size-".h($j)."'>".($_GET["dbsize"]?db_size($j):"?"),"\n";}echo"</table>\n",(support("database")?"<fieldset><legend>".lang(114)." <span id='selected'></span></legend><div>\n"."<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^db/));\">\n"."<input type='submit' name='drop' value='".lang(115)."'".confirm().">\n"."</div></fieldset>\n":""),"<script type='text/javascript'>tableCheck();</script>\n","<input type='hidden' name='token' value='$T'>\n","</form>\n";}}page_footer("db");}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(isset($_GET["import"]))$_GET["sql"]=$_GET["import"];if(!(DB!=""?$f->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect"||$_GET["script"]=="kill")){if(DB!=""||$_GET["refresh"]){restart_session();set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"]))redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());if(!set_schema($_GET["ns"])){header("HTTP/1.1 404 Not Found");page_header(lang(67).": ".h($_GET["ns"]),lang(116),true);page_footer("ns");exit;}}$ve="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";class
TmpFile{var$handler;var$size;function
__construct(){$this->handler=tmpfile();}function
write($pb){$this->size+=strlen($pb);fwrite($this->handler,$pb);}function
send(){fseek($this->handler,0);fpassthru($this->handler);fclose($this->handler);}}$hc="'(?:''|[^'\\\\]|\\\\.)*'";$ed="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];$m=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));$M=array(idf_escape($_GET["field"]));$I=$Ob->select($a,$M,array(where($_GET,$m)),$M);$K=($I?$I->fetch_row():array());echo$K[0];exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$m=fields($a);if(!$m)$k=error();$R=table_status1($a,true);page_header(($m&&is_view($R)?lang(117):lang(118)).": ".h($a),$k);$b->selectLinks($R);$jb=$R["Comment"];if($jb!="")echo"<p>".lang(95).": ".h($jb)."\n";if($m){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(119)."<td>".lang(91).(support("comment")?"<td>".lang(95):"")."</thead>\n";foreach($m
as$l){echo"<tr".odd()."><th>".h($l["field"]),"<td><span title='".h($l["collation"])."'>".h($l["full_type"])."</span>",($l["null"]?" <i>NULL</i>":""),($l["auto_increment"]?" <i>".lang(55)."</i>":""),(isset($l["default"])?" <span title='".lang(94)."'>[<b>".h($l["default"])."</b>]</span>":""),(support("comment")?"<td>".nbsp($l["comment"]):""),"\n";}echo"</table>\n";}if(!is_view($R)){if(support("indexes")){echo"<h3 id='indexes'>".lang(120)."</h3>\n";$v=indexes($a);if($v){echo"<table cellspacing='0'>\n";foreach($v
as$D=>$u){ksort($u["columns"]);$lf=array();foreach($u["columns"]as$x=>$X)$lf[]="<i>".h($X)."</i>".($u["lengths"][$x]?"(".$u["lengths"][$x].")":"").($u["descs"][$x]?" DESC":"");echo"<tr title='".h($D)."'><th>$u[type]<td>".implode(", ",$lf)."\n";}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'indexes='.urlencode($a).'">'.lang(121)."</a>\n";}if(fk_support($R)){echo"<h3 id='foreign-keys'>".lang(85)."</h3>\n";$Fc=foreign_keys($a);if($Fc){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(122)."<td>".lang(123)."<td>".lang(88)."<td>".lang(87)."<td>&nbsp;</thead>\n";foreach($Fc
as$D=>$o){echo"<tr title='".h($D)."'>","<th><i>".implode("</i>, <i>",array_map('h',$o["source"]))."</i>","<td><a href='".h($o["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($o["db"]),ME):($o["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($o["ns"]),ME):ME))."table=".urlencode($o["table"])."'>".($o["db"]!=""?"<b>".h($o["db"])."</b>.":"").($o["ns"]!=""?"<b>".h($o["ns"])."</b>.":"").h($o["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$o["target"]))."</i>)","<td>".nbsp($o["on_delete"])."\n","<td>".nbsp($o["on_update"])."\n",'<td><a href="'.h(ME.'foreign='.urlencode($a).'&name='.urlencode($D)).'">'.lang(124).'</a>';}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'foreign='.urlencode($a).'">'.lang(125)."</a>\n";}}if(support(is_view($R)?"view_trigger":"trigger")){echo"<h3 id='triggers'>".lang(126)."</h3>\n";$Zg=triggers($a);if($Zg){echo"<table cellspacing='0'>\n";foreach($Zg
as$x=>$X)echo"<tr valign='top'><td>".h($X[0])."<td>".h($X[1])."<th>".h($x)."<td><a href='".h(ME.'trigger='.urlencode($a).'&name='.urlencode($x))."'>".lang(124)."</a>\n";echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'trigger='.urlencode($a).'">'.lang(127)."</a>\n";}}elseif(isset($_GET["schema"])){page_header(lang(61),"",array(),h(DB.($_GET["ns"]?".$_GET[ns]":"")));$xg=array();$yg=array();$ea=($_GET["schema"]?$_GET["schema"]:$_COOKIE["adminer_schema-".str_replace(".","_",DB)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ea,$B,PREG_SET_ORDER);foreach($B
as$r=>$A){$xg[$A[1]]=array($A[2],$A[3]);$yg[]="\n\t'".js_escape($A[1])."': [ $A[2], $A[3] ]";}$Rg=0;$Ia=-1;$Rf=array();$Bf=array();$Ed=array();foreach(table_status('',true)as$Q=>$R){if(is_view($R))continue;$df=0;$Rf[$Q]["fields"]=array();foreach(fields($Q)as$D=>$l){$df+=1.25;$l["pos"]=$df;$Rf[$Q]["fields"][$D]=$l;}$Rf[$Q]["pos"]=($xg[$Q]?$xg[$Q]:array($Rg,0));foreach($b->foreignKeys($Q)as$X){if(!$X["db"]){$Cd=$Ia;if($xg[$Q][1]||$xg[$X["table"]][1])$Cd=min(floatval($xg[$Q][1]),floatval($xg[$X["table"]][1]))-1;else$Ia-=.1;while($Ed[(string)$Cd])$Cd-=.0001;$Rf[$Q]["references"][$X["table"]][(string)$Cd]=array($X["source"],$X["target"]);$Bf[$X["table"]][$Q][(string)$Cd]=$X["target"];$Ed[(string)$Cd]=true;}}$Rg=max($Rg,$Rf[$Q]["pos"][0]+2.5+$df);}echo'<div id="schema" style="height: ',$Rg,'em;" onselectstart="return false;">
<script type="text/javascript">
var tablePos = {',implode(",",$yg)."\n",'};
var em = document.getElementById(\'schema\').offsetHeight / ',$Rg,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($Rf
as$D=>$Q){echo"<div class='table' style='top: ".$Q["pos"][0]."em; left: ".$Q["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($D).'"><b>'.h($D)."</b></a>";foreach($Q["fields"]as$l){$X='<span'.type_class($l["type"]).' title="'.h($l["full_type"].($l["null"]?" NULL":'')).'">'.h($l["field"]).'</span>';echo"<br>".($l["primary"]?"<i>$X</i>":$X);}foreach((array)$Q["references"]as$Dg=>$Cf){foreach($Cf
as$Cd=>$zf){$Dd=$Cd-$xg[$D][1];$r=0;foreach($zf[0]as$gg)echo"\n<div class='references' title='".h($Dg)."' id='refs$Cd-".($r++)."' style='left: $Dd"."em; top: ".$Q["fields"][$gg]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$Dd)."em;'></div></div>";}}foreach((array)$Bf[$D]as$Dg=>$Cf){foreach($Cf
as$Cd=>$e){$Dd=$Cd-$xg[$D][1];$r=0;foreach($e
as$Cg)echo"\n<div class='references' title='".h($Dg)."' id='refd$Cd-".($r++)."' style='left: $Dd"."em; top: ".$Q["fields"][$Cg]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=4.2.5'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$Dd)."em;'></div></div>";}}echo"\n</div>\n";}foreach($Rf
as$D=>$Q){foreach((array)$Q["references"]as$Dg=>$Cf){foreach($Cf
as$Cd=>$zf){$Zd=$Rg;$Pd=-10;foreach($zf[0]as$x=>$gg){$ef=$Q["pos"][0]+$Q["fields"][$gg]["pos"];$ff=$Rf[$Dg]["pos"][0]+$Rf[$Dg]["fields"][$zf[1][$x]]["pos"];$Zd=min($Zd,$ef,$ff);$Pd=max($Pd,$ef,$ff);}echo"<div class='references' id='refl$Cd' style='left: $Cd"."em; top: $Zd"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($Pd-$Zd)."em;'></div></div>\n";}}}echo'</div>
<p class="links"><a href="',h(ME."schema=".urlencode($ea)),'" id="schema-link">',lang(128),'</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST&&!$k){$sb="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$x)$sb.="&$x=".urlencode($_POST[$x]);cookie("adminer_export",substr($sb,1));$S=array_flip((array)$_POST["tables"])+array_flip((array)$_POST["data"]);$tc=dump_headers((count($S)==1?key($S):DB),(DB==""||count($S)>1));$md=preg_match('~sql~',$_POST["format"]);if($md){echo"-- Adminer $ia ".$Pb[DRIVER]." dump\n\n";if($w=="sql"){echo"SET NAMES utf8;
SET time_zone = '+00:00';
".($_POST["data_style"]?"SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';
":"")."
";$f->query("SET time_zone = '+00:00';");}}$pg=$_POST["db_style"];$i=array(DB);if(DB==""){$i=$_POST["databases"];if(is_string($i))$i=explode("\n",rtrim(str_replace("\r","",$i),"\n"));}foreach((array)$i
as$j){$b->dumpDatabase($j);if($f->select_db($j)){if($md&&preg_match('~CREATE~',$pg)&&($h=$f->result("SHOW CREATE DATABASE ".idf_escape($j),1))){set_utf8mb4($h);if($pg=="DROP+CREATE")echo"DROP DATABASE IF EXISTS ".idf_escape($j).";\n";echo"$h;\n";}if($md){if($pg)echo
use_sql($j).";\n\n";$Me="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$Lf){foreach(get_rows("SHOW $Lf STATUS WHERE Db = ".q($j),null,"-- ")as$K){$h=remove_definer($f->result("SHOW CREATE $Lf ".idf_escape($K["Name"]),2));set_utf8mb4($h);$Me.=($pg!='DROP+CREATE'?"DROP $Lf IF EXISTS ".idf_escape($K["Name"]).";;\n":"")."$h;;\n\n";}}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$K){$h=remove_definer($f->result("SHOW CREATE EVENT ".idf_escape($K["Name"]),3));set_utf8mb4($h);$Me.=($pg!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($K["Name"]).";;\n":"")."$h;;\n\n";}}if($Me)echo"DELIMITER ;;\n\n$Me"."DELIMITER ;\n\n";}if($_POST["table_style"]||$_POST["data_style"]){$xh=array();foreach(table_status('',true)as$D=>$R){$Q=(DB==""||in_array($D,(array)$_POST["tables"]));$xb=(DB==""||in_array($D,(array)$_POST["data"]));if($Q||$xb){if($tc=="tar"){$Pg=new
TmpFile;ob_start(array($Pg,'write'),1e5);}$b->dumpTable($D,($Q?$_POST["table_style"]:""),(is_view($R)?2:0));if(is_view($R))$xh[]=$D;elseif($xb){$m=fields($D);$b->dumpData($D,$_POST["data_style"],"SELECT *".convert_fields($m,$m)." FROM ".table($D));}if($md&&$_POST["triggers"]&&$Q&&($Zg=trigger_sql($D,$_POST["table_style"])))echo"\nDELIMITER ;;\n$Zg\nDELIMITER ;\n";if($tc=="tar"){ob_end_flush();tar_file((DB!=""?"":"$j/")."$D.csv",$Pg);}elseif($md)echo"\n";}}foreach($xh
as$wh)$b->dumpTable($wh,$_POST["table_style"],1);if($tc=="tar")echo
pack("x512");}}}if($md)echo"-- ".$f->result("SELECT NOW()")."\n";exit;}page_header(lang(64),$k,($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),h(DB));echo'
<form action="" method="post">
<table cellspacing="0">
';$Ab=array('','USE','DROP+CREATE','CREATE');$zg=array('','DROP+CREATE','CREATE');$yb=array('','TRUNCATE+INSERT','INSERT');if($w=="sql")$yb[]='INSERT+UPDATE';parse_str($_COOKIE["adminer_export"],$K);if(!$K)$K=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");if(!isset($K["events"])){$K["routines"]=$K["events"]=($_GET["dump"]=="");$K["triggers"]=$K["table_style"];}echo"<tr><th>".lang(129)."<td>".html_select("output",$b->dumpOutput(),$K["output"],0)."\n";echo"<tr><th>".lang(130)."<td>".html_select("format",$b->dumpFormat(),$K["format"],0)."\n";echo($w=="sqlite"?"":"<tr><th>".lang(33)."<td>".html_select('db_style',$Ab,$K["db_style"]).(support("routine")?checkbox("routines",1,$K["routines"],lang(131)):"").(support("event")?checkbox("events",1,$K["events"],lang(132)):"")),"<tr><th>".lang(111)."<td>".html_select('table_style',$zg,$K["table_style"]).checkbox("auto_increment",1,$K["auto_increment"],lang(55)).(support("trigger")?checkbox("triggers",1,$K["triggers"],lang(126)):""),"<tr><th>".lang(133)."<td>".html_select('data_style',$yb,$K["data_style"]),'</table>
<p><input type="submit" value="',lang(64),'">
<input type="hidden" name="token" value="',$T,'">

<table cellspacing="0">
';$if=array();if(DB!=""){$Ua=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label class='block'><input type='checkbox' id='check-tables'$Ua onclick='formCheck(this, /^tables\\[/);'>".lang(111)."</label>","<th style='text-align: right;'><label class='block'>".lang(133)."<input type='checkbox' id='check-data'$Ua onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$xh="";$_g=tables_list();foreach($_g
as$D=>$U){$hf=preg_replace('~_.*~','',$D);$Ua=($a==""||$a==(substr($a,-1)=="%"?"$hf%":$D));$lf="<tr><td>".checkbox("tables[]",$D,$Ua,$D,"checkboxClick(event, this); formUncheck('check-tables');","block");if($U!==null&&!preg_match('~table~i',$U))$xh.="$lf\n";else
echo"$lf<td align='right'><label class='block'><span id='Rows-".h($D)."'></span>".checkbox("data[]",$D,$Ua,"","checkboxClick(event, this); formUncheck('check-data');")."</label>\n";$if[$hf]++;}echo$xh;if($_g)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}else{echo"<thead><tr><th style='text-align: left;'><label class='block'><input type='checkbox' id='check-databases'".($a==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".lang(33)."</label></thead>\n";$i=$b->databases();if($i){foreach($i
as$j){if(!information_schema($j)){$hf=preg_replace('~_.*~','',$j);echo"<tr><td>".checkbox("databases[]",$j,$a==""||$a=="$hf%",$j,"formUncheck('check-databases');","block")."\n";$if[$hf]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$Bc=true;foreach($if
as$x=>$X){if($x!=""&&$X>1){echo($Bc?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$x%")."'>".h($x)."</a>";$Bc=false;}}}elseif(isset($_GET["privileges"])){page_header(lang(62));$I=$f->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$Mc=$I;if(!$I)$I=$f->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($Mc?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0'>\n","<thead><tr><th>".lang(31)."<th>".lang(30)."<th>&nbsp;</thead>\n";while($K=$I->fetch_assoc())echo'<tr'.odd().'><td>'.h($K["User"])."<td>".h($K["Host"]).'<td><a href="'.h(ME.'user='.urlencode($K["User"]).'&host='.urlencode($K["Host"])).'">'.lang(10)."</a>\n";if(!$Mc||DB!="")echo"<tr".odd()."><td><input name='user' autocapitalize='off'><td><input name='host' value='localhost' autocapitalize='off'><td><input type='submit' value='".lang(10)."'>\n";echo"</table>\n","</form>\n",'<p class="links"><a href="'.h(ME).'user=">'.lang(134)."</a>";}elseif(isset($_GET["sql"])){if(!$k&&$_POST["export"]){dump_headers("sql");$b->dumpTable("","");$b->dumpData("","table",$_POST["query"]);exit;}restart_session();$Vc=&get_session("queries");$Uc=&$Vc[DB];if(!$k&&$_POST["clear"]){$Uc=array();redirect(remove_from_uri("history"));}page_header((isset($_GET["import"])?lang(63):lang(54)),$k);if(!$k&&$_POST){$Jc=false;if(!isset($_GET["import"]))$H=$_POST["query"];elseif($_POST["webfile"]){$Jc=@fopen((file_exists("adminer.sql")?"adminer.sql":"compress.zlib://adminer.sql.gz"),"rb");$H=($Jc?fread($Jc,1e6):false);}else$H=get_file("sql_file",true);if(is_string($H)){if(function_exists('memory_get_usage'))@ini_set("memory_limit",max(ini_bytes("memory_limit"),2*strlen($H)+memory_get_usage()+8e6));if($H!=""&&strlen($H)<1e6){$G=$H.(preg_match("~;[ \t\r\n]*\$~",$H)?"":";");if(!$Uc||reset(end($Uc))!=$G){restart_session();$Uc[]=array($G,time());set_session("queries",$Vc);stop_session();}}$hg="(?:\\s|/\\*[\s\S]*?\\*/|(?:#|-- )[^\n]*\n?|--\r?\n)";$Fb=";";$oe=0;$ec=true;$g=connect();if(is_object($g)&&DB!="")$g->select_db(DB);$ib=0;$jc=array();$Re='[\'"'.($w=="sql"?'`#':($w=="sqlite"?'`[':($w=="mssql"?'[':''))).']|/\\*|-- |$'.($w=="pgsql"?'|\\$[^$]*\\$':'');$Sg=microtime(true);parse_str($_COOKIE["adminer_export"],$qa);$Vb=$b->dumpFormat();unset($Vb["sql"]);while($H!=""){if(!$oe&&preg_match("~^$hg*+DELIMITER\\s+(\\S+)~i",$H,$A)){$Fb=$A[1];$H=substr($H,strlen($A[0]));}else{preg_match('('.preg_quote($Fb)."\\s*|$Re)",$H,$A,PREG_OFFSET_CAPTURE,$oe);list($Hc,$df)=$A[0];if(!$Hc&&$Jc&&!feof($Jc))$H.=fread($Jc,1e5);else{if(!$Hc&&rtrim($H)=="")break;$oe=$df+strlen($Hc);if($Hc&&rtrim($Hc)!=$Fb){while(preg_match('('.($Hc=='/*'?'\\*/':($Hc=='['?']':(preg_match('~^-- |^#~',$Hc)?"\n":preg_quote($Hc)."|\\\\."))).'|$)s',$H,$A,PREG_OFFSET_CAPTURE,$oe)){$Pf=$A[0][0];if(!$Pf&&$Jc&&!feof($Jc))$H.=fread($Jc,1e5);else{$oe=$A[0][1]+strlen($Pf);if($Pf[0]!="\\")break;}}}else{$ec=false;$G=substr($H,0,$df);$ib++;$lf="<pre id='sql-$ib'><code class='jush-$w'>".shorten_utf8(trim($G),1000)."</code></pre>\n";if($w=="sqlite"&&preg_match("~^$hg*+ATTACH\\b~i",$G,$A)){echo$lf,"<p class='error'>".lang(135)."\n";$jc[]=" <a href='#sql-$ib'>$ib</a>";if($_POST["error_stops"])break;}else{if(!$_POST["only_errors"]){echo$lf;ob_flush();flush();}$kg=microtime(true);if($f->multi_query($G)&&is_object($g)&&preg_match("~^$hg*+USE\\b~i",$G))$g->query($G);do{$I=$f->store_result();$Ig=" <span class='time'>(".format_time($kg).")</span>".(strlen($G)<1000?" <a href='".h(ME)."sql=".urlencode(trim($G))."'>".lang(10)."</a>":"");if($f->error){echo($_POST["only_errors"]?$lf:""),"<p class='error'>".lang(136).($f->errno?" ($f->errno)":"").": ".error()."\n";$jc[]=" <a href='#sql-$ib'>$ib</a>";if($_POST["error_stops"])break
2;}elseif(is_object($I)){$y=$_POST["limit"];$Ge=select($I,$g,array(),$y);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n";$ke=$I->num_rows;echo"<p>".($ke?($y&&$ke>$y?lang(137,$y):"").lang(138,$ke):""),$Ig;$s="export-$ib";$sc=", <a href='#$s' onclick=\"return !toggle('$s');\">".lang(64)."</a><span id='$s' class='hidden'>: ".html_select("output",$b->dumpOutput(),$qa["output"])." ".html_select("format",$Vb,$qa["format"])."<input type='hidden' name='query' value='".h($G)."'>"." <input type='submit' name='export' value='".lang(64)."'><input type='hidden' name='token' value='$T'></span>\n";if($g&&preg_match("~^($hg|\\()*+SELECT\\b~i",$G)&&($rc=explain($g,$G))){$s="explain-$ib";echo", <a href='#$s' onclick=\"return !toggle('$s');\">EXPLAIN</a>$sc","<div id='$s' class='hidden'>\n";select($rc,$g,$Ge);echo"</div>\n";}else
echo$sc;echo"</form>\n";}}else{if(preg_match("~^$hg*+(CREATE|DROP|ALTER)$hg++(DATABASE|SCHEMA)\\b~i",$G)){restart_session();set_session("dbs",null);stop_session();}if(!$_POST["only_errors"])echo"<p class='message' title='".h($f->info)."'>".lang(139,$f->affected_rows)."$Ig\n";}$kg=microtime(true);}while($f->next_result());}$H=substr($H,$oe);$oe=0;}}}}if($ec)echo"<p class='message'>".lang(140)."\n";elseif($_POST["only_errors"]){echo"<p class='message'>".lang(141,$ib-count($jc))," <span class='time'>(".format_time($Sg).")</span>\n";}elseif($jc&&$ib>1)echo"<p class='error'>".lang(136).": ".implode("",$jc)."\n";}else
echo"<p class='error'>".upload_error($H)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';$oc="<input type='submit' value='".lang(142)."' title='Ctrl+Enter'>";if(!isset($_GET["import"])){$G=$_GET["sql"];if($_POST)$G=$_POST["query"];elseif($_GET["history"]=="all")$G=$Uc;elseif($_GET["history"]!="")$G=$Uc[$_GET["history"]][0];echo"<p>";textarea("query",$G,20);echo($_POST?"":"<script type='text/javascript'>focus(document.getElementsByTagName('textarea')[0]);</script>\n"),"<p>$oc\n",lang(143).": <input type='number' name='limit' class='size' value='".h($_POST?$_POST["limit"]:$_GET["limit"])."'>\n";}else{echo"<fieldset><legend>".lang(144)."</legend><div>",(ini_bool("file_uploads")?"SQL (&lt; ".ini_get("upload_max_filesize")."B): <input type='file' name='sql_file[]' multiple>\n$oc":lang(145)),"</div></fieldset>\n","<fieldset><legend>".lang(146)."</legend><div>",lang(147,"<code>adminer.sql".(extension_loaded("zlib")?"[.gz]":"")."</code>"),' <input type="submit" name="webfile" value="'.lang(148).'">',"</div></fieldset>\n","<p>";}echo
checkbox("error_stops",1,($_POST?$_POST["error_stops"]:isset($_GET["import"])),lang(149))."\n",checkbox("only_errors",1,($_POST?$_POST["only_errors"]:isset($_GET["import"])),lang(150))."\n","<input type='hidden' name='token' value='$T'>\n";if(!isset($_GET["import"])&&$Uc){print_fieldset("history",lang(151),$_GET["history"]!="");for($X=end($Uc);$X;$X=prev($Uc)){$x=key($Uc);list($G,$Ig,$Zb)=$X;echo'<a href="'.h(ME."sql=&history=$x").'">'.lang(10)."</a>"." <span class='time' title='".@date('Y-m-d',$Ig)."'>".@date("H:i:s",$Ig)."</span>"." <code class='jush-$w'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$G)))),80,"</code>").($Zb?" <span class='time'>($Zb)</span>":"")."<br>\n";}echo"<input type='submit' name='clear' value='".lang(152)."'>\n","<a href='".h(ME."sql=&history=all")."'>".lang(153)."</a>\n","</div></fieldset>\n";}echo'</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$m=fields($a);$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$m):""):where($_GET,$m));$kh=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($m
as$D=>$l){if(!isset($l["privileges"][$kh?"update":"insert"])||$b->fieldName($l)=="")unset($m[$D]);}if($_POST&&!$k&&!isset($_GET["select"])){$_=$_POST["referer"];if($_POST["insert"])$_=($kh?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$_))$_=ME."select=".urlencode($a);$v=indexes($a);$fh=unique_array($_GET["where"],$v);$uf="\nWHERE $Z";if(isset($_POST["delete"]))queries_redirect($_,lang(154),$Ob->delete($a,$uf,!$fh));else{$O=array();foreach($m
as$D=>$l){$X=process_input($l);if($X!==false&&$X!==null)$O[idf_escape($D)]=$X;}if($kh){if(!$O)redirect($_);queries_redirect($_,lang(155),$Ob->update($a,$O,$uf,!$fh));if(is_ajax()){page_headers();page_messages($k);exit;}}else{$I=$Ob->insert($a,$O);$Bd=($I?last_id():0);queries_redirect($_,lang(156,($Bd?" $Bd":"")),$I);}}}$K=null;if($_POST["save"])$K=(array)$_POST["fields"];elseif($Z){$M=array();foreach($m
as$D=>$l){if(isset($l["privileges"]["select"])){$za=convert_field($l);if($_POST["clone"]&&$l["auto_increment"])$za="''";if($w=="sql"&&preg_match("~enum|set~",$l["type"]))$za="1*".idf_escape($D);$M[]=($za?"$za AS ":"").idf_escape($D);}}$K=array();if(!support("table"))$M=array("*");if($M){$I=$Ob->select($a,$M,array($Z),$M,array(),(isset($_GET["select"])?2:1));$K=$I->fetch_assoc();if(!$K)$K=false;if(isset($_GET["select"])&&(!$K||$I->fetch_assoc()))$K=null;}}if(!support("table")&&!$m){if(!$Z){$I=$Ob->select($a,array("*"),$Z,array("*"));$K=($I?$I->fetch_assoc():false);if(!$K)$K=array($Ob->primary=>"");}if($K){foreach($K
as$x=>$X){if(!$Z)$K[$x]=null;$m[$x]=array("field"=>$x,"null"=>($x!=$Ob->primary),"auto_increment"=>($x==$Ob->primary));}}}edit_form($a,$m,$K,$kh);}elseif(isset($_GET["create"])){$a=$_GET["create"];$Se=array();foreach(array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST')as$x)$Se[$x]=$x;$Af=referencable_primary($a);$Fc=array();foreach($Af
as$wg=>$l)$Fc[str_replace("`","``",$wg)."`".str_replace("`","``",$l["field"])]=$wg;$Je=array();$R=array();if($a!=""){$Je=fields($a);$R=table_status($a);if(!$R)$k=lang(9);}$K=$_POST;$K["fields"]=(array)$K["fields"];if($K["auto_increment_col"])$K["fields"][$K["auto_increment_col"]]["auto_increment"]=true;if($_POST&&!process_fields($K["fields"])&&!$k){if($_POST["drop"])queries_redirect(substr(ME,0,-1),lang(157),drop_tables(array($a)));else{$m=array();$xa=array();$nh=false;$Dc=array();ksort($K["fields"]);$Ie=reset($Je);$ua=" FIRST";foreach($K["fields"]as$x=>$l){$o=$Fc[$l["type"]];$ah=($o!==null?$Af[$o]:$l);if($l["field"]!=""){if(!$l["has_default"])$l["default"]=null;if($x==$K["auto_increment_col"])$l["auto_increment"]=true;$qf=process_field($l,$ah);$xa[]=array($l["orig"],$qf,$ua);if($qf!=process_field($Ie,$Ie)){$m[]=array($l["orig"],$qf,$ua);if($l["orig"]!=""||$ua)$nh=true;}if($o!==null)$Dc[idf_escape($l["field"])]=($a!=""&&$w!="sqlite"?"ADD":" ").format_foreign_key(array('table'=>$Fc[$l["type"]],'source'=>array($l["field"]),'target'=>array($ah["field"]),'on_delete'=>$l["on_delete"],));$ua=" AFTER ".idf_escape($l["field"]);}elseif($l["orig"]!=""){$nh=true;$m[]=array($l["orig"]);}if($l["orig"]!=""){$Ie=next($Je);if(!$Ie)$ua="";}}$Ue="";if($Se[$K["partition_by"]]){$Ve=array();if($K["partition_by"]=='RANGE'||$K["partition_by"]=='LIST'){foreach(array_filter($K["partition_names"])as$x=>$X){$Y=$K["partition_values"][$x];$Ve[]="\n  PARTITION ".idf_escape($X)." VALUES ".($K["partition_by"]=='RANGE'?"LESS THAN":"IN").($Y!=""?" ($Y)":" MAXVALUE");}}$Ue.="\nPARTITION BY $K[partition_by]($K[partition])".($Ve?" (".implode(",",$Ve)."\n)":($K["partitions"]?" PARTITIONS ".(+$K["partitions"]):""));}elseif(support("partitioning")&&preg_match("~partitioned~",$R["Create_options"]))$Ue.="\nREMOVE PARTITIONING";$C=lang(158);if($a==""){cookie("adminer_engine",$K["Engine"]);$C=lang(159);}$D=trim($K["name"]);queries_redirect(ME.(support("table")?"table=":"select=").urlencode($D),$C,alter_table($a,$D,($w=="sqlite"&&($nh||$Dc)?$xa:$m),$Dc,($K["Comment"]!=$R["Comment"]?$K["Comment"]:null),($K["Engine"]&&$K["Engine"]!=$R["Engine"]?$K["Engine"]:""),($K["Collation"]&&$K["Collation"]!=$R["Collation"]?$K["Collation"]:""),($K["Auto_increment"]!=""?number($K["Auto_increment"]):""),$Ue));}}page_header(($a!=""?lang(40):lang(65)),$k,array("table"=>$a),h($a));if(!$_POST){$K=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($ch["int"])?"int":(isset($ch["integer"])?"integer":"")))),"partition_names"=>array(""),);if($a!=""){$K=$R;$K["name"]=$a;$K["fields"]=array();if(!$_GET["auto_increment"])$K["Auto_increment"]="";foreach($Je
as$l){$l["has_default"]=isset($l["default"]);$K["fields"][]=$l;}if(support("partitioning")){$Kc="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($a);$I=$f->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $Kc ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($K["partition_by"],$K["partitions"],$K["partition"])=$I->fetch_row();$Ve=get_key_vals("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $Kc AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION");$Ve[""]="";$K["partition_names"]=array_keys($Ve);$K["partition_values"]=array_values($Ve);}}}$fb=collations();$gc=engines();foreach($gc
as$fc){if(!strcasecmp($fc,$K["Engine"])){$K["Engine"]=$fc;break;}}echo'
<form action="" method="post" id="form">
<p>
';if(support("columns")||$a==""){echo
lang(160),': <input name="name" maxlength="64" value="',h($K["name"]),'" autocapitalize="off">
';if($a==""&&!$_POST){?><script type='text/javascript'>focus(document.getElementById('form')['name']);</script><?php }echo($gc?"<select name='Engine' onchange='helpClose();'".on_help("getTarget(event).value",1).">".optionlist(array(""=>"(".lang(161).")")+$gc,$K["Engine"])."</select>":""),' ',($fb&&!preg_match("~sqlite|mssql~",$w)?html_select("Collation",array(""=>"(".lang(86).")")+$fb,$K["Collation"]):""),' <input type="submit" value="',lang(14),'">
';}echo'
';if(support("columns")){echo'<table cellspacing="0" id="edit-fields" class="nowrap">
';$kb=($_POST?$_POST["comments"]:$K["Comment"]!="");if(!$_POST&&!$kb){foreach($K["fields"]as$l){if($l["comment"]!=""){$kb=true;break;}}}edit_fields($K["fields"],$fb,"TABLE",$Fc,$kb);echo'</table>
<p>
',lang(55),': <input type="number" name="Auto_increment" size="6" value="',h($K["Auto_increment"]),'">
',checkbox("defaults",1,true,lang(162),"columnShow(this.checked, 5)","jsonly");if(!$_POST["defaults"]){echo'<script type="text/javascript">editingHideDefaults()</script>';}echo(support("comment")?"<label><input type='checkbox' name='comments' value='1' class='jsonly' onclick=\"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();\"".($kb?" checked":"").">".lang(95)."</label>".' <input name="Comment" id="Comment" value="'.h($K["Comment"]).'" maxlength="'.($f->server_info>=5.5?2048:60).'"'.($kb?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="',lang(14),'">
';}echo'
';if($a!=""){echo'<input type="submit" name="drop" value="',lang(115),'"',confirm(),'>';}if(support("partitioning")){$Te=preg_match('~RANGE|LIST~',$K["partition_by"]);print_fieldset("partition",lang(163),$K["partition_by"]);echo'<p>
',"<select name='partition_by' onchange='partitionByChange(this);'".on_help("getTarget(event).value.replace(/./, 'PARTITION BY \$&')",1).">".optionlist(array(""=>"")+$Se,$K["partition_by"])."</select>",'(<input name="partition" value="',h($K["partition"]),'">)
',lang(164),': <input type="number" name="partitions" class="size',($Te||!$K["partition_by"]?" hidden":""),'" value="',h($K["partitions"]),'">
<table cellspacing="0" id="partition-table"',($Te?"":" class='hidden'"),'>
<thead><tr><th>',lang(165),'<th>',lang(166),'</thead>
';foreach($K["partition_names"]as$x=>$X){echo'<tr>','<td><input name="partition_names[]" value="'.h($X).'"'.($x==count($K["partition_names"])-1?' onchange="partitionNameChange(this);"':'').' autocapitalize="off">','<td><input name="partition_values[]" value="'.h($K["partition_values"][$x]).'">';}echo'</table>
</div></fieldset>
';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$cd=array("PRIMARY","UNIQUE","INDEX");$R=table_status($a,true);if(preg_match('~MyISAM|M?aria'.($f->server_info>=5.6?'|InnoDB':'').'~i',$R["Engine"]))$cd[]="FULLTEXT";$v=indexes($a);$jf=array();if($w=="mongo"){$jf=$v["_id_"];unset($cd[0]);unset($v["_id_"]);}$K=$_POST;if($_POST&&!$k&&!$_POST["add"]&&!$_POST["drop_col"]){$c=array();foreach($K["indexes"]as$u){$D=$u["name"];if(in_array($u["type"],$cd)){$e=array();$Hd=array();$Hb=array();$O=array();ksort($u["columns"]);foreach($u["columns"]as$x=>$d){if($d!=""){$Gd=$u["lengths"][$x];$Gb=$u["descs"][$x];$O[]=idf_escape($d).($Gd?"(".(+$Gd).")":"").($Gb?" DESC":"");$e[]=$d;$Hd[]=($Gd?$Gd:null);$Hb[]=$Gb;}}if($e){$pc=$v[$D];if($pc){ksort($pc["columns"]);ksort($pc["lengths"]);ksort($pc["descs"]);if($u["type"]==$pc["type"]&&array_values($pc["columns"])===$e&&(!$pc["lengths"]||array_values($pc["lengths"])===$Hd)&&array_values($pc["descs"])===$Hb){unset($v[$D]);continue;}}$c[]=array($u["type"],$D,$O);}}}foreach($v
as$D=>$pc)$c[]=array($pc["type"],$D,"DROP");if(!$c)redirect(ME."table=".urlencode($a));queries_redirect(ME."table=".urlencode($a),lang(167),alter_indexes($a,$c));}page_header(lang(120),$k,array("table"=>$a),h($a));$m=array_keys(fields($a));if($_POST["add"]){foreach($K["indexes"]as$x=>$u){if($u["columns"][count($u["columns"])]!="")$K["indexes"][$x]["columns"][]="";}$u=end($K["indexes"]);if($u["type"]||array_filter($u["columns"],'strlen'))$K["indexes"][]=array("columns"=>array(1=>""));}if(!$K){foreach($v
as$x=>$u){$v[$x]["name"]=$x;$v[$x]["columns"][]="";}$v[]=array("columns"=>array(1=>""));$K["indexes"]=$v;}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr>
<th>',lang(168),'<th><input type="submit" style="left: -1000px; position: absolute;">',lang(169),'<th>',lang(170);?>
<th><noscript><input type='image' class='icon' name='add[0]' src='" . h(preg_replace("~\\?.*~", "", ME)) . "?file=plus.gif&amp;version=4.2.5' alt='+' title='<?php echo
lang(96),'\'></noscript>&nbsp;
</thead>
';if($jf){echo"<tr><td>PRIMARY<td>";foreach($jf["columns"]as$x=>$d){echo
select_input(" disabled",$m,$d),"<label><input disabled type='checkbox'>".lang(49)."</label> ";}echo"<td><td>\n";}$qd=1;foreach($K["indexes"]as$u){if(!$_POST["drop_col"]||$qd!=key($_POST["drop_col"])){echo"<tr><td>".html_select("indexes[$qd][type]",array(-1=>"")+$cd,$u["type"],($qd==count($K["indexes"])?"indexesAddRow(this);":1)),"<td>";ksort($u["columns"]);$r=1;foreach($u["columns"]as$x=>$d){echo"<span>".select_input(" name='indexes[$qd][columns][$r]' onchange=\"".($r==count($u["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".h(js_escape($w=="sql"?"":$_GET["indexes"]."_"))."');\"",($m?array_combine($m,$m):$m),$d),($w=="sql"||$w=="mssql"?"<input type='number' name='indexes[$qd][lengths][$r]' class='size' value='".h($u["lengths"][$x])."'>":""),($w!="sql"?checkbox("indexes[$qd][descs][$r]",1,$u["descs"][$x],lang(49)):"")," </span>";$r++;}echo"<td><input name='indexes[$qd][name]' value='".h($u["name"])."' autocapitalize='off'>\n","<td><input type='image' class='icon' name='drop_col[$qd]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.2.5' alt='x' title='".lang(99)."' onclick=\"return !editingRemoveRow(this, 'indexes\$1[type]');\">\n";}$qd++;}echo'</table>
<p>
<input type="submit" value="',lang(14),'">
<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["database"])){$K=$_POST;if($_POST&&!$k&&!isset($_POST["add_x"])){$D=trim($K["name"]);if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),lang(171),drop_databases(array(DB)));}elseif(DB!==$D){if(DB!=""){$_GET["db"]=$D;queries_redirect(preg_replace('~\bdb=[^&]*&~','',ME)."db=".urlencode($D),lang(172),rename_database($D,$K["collation"]));}else{$i=explode("\n",str_replace("\r","",$D));$qg=true;$Ad="";foreach($i
as$j){if(count($i)==1||$j!=""){if(!create_database($j,$K["collation"]))$qg=false;$Ad=$j;}}restart_session();set_session("dbs",null);queries_redirect(ME."db=".urlencode($Ad),lang(173),$qg);}}else{if(!$K["collation"])redirect(substr(ME,0,-1));query_redirect("ALTER DATABASE ".idf_escape($D).(preg_match('~^[a-z0-9_]+$~i',$K["collation"])?" COLLATE $K[collation]":""),substr(ME,0,-1),lang(174));}}page_header(DB!=""?lang(58):lang(175),$k,array(),h(DB));$fb=collations();$D=DB;if($_POST)$D=$K["name"];elseif(DB!="")$K["collation"]=db_collation(DB,$fb);elseif($w=="sql"){foreach(get_vals("SHOW GRANTS")as$Mc){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$Mc,$A)&&$A[1]){$D=stripcslashes(idf_unescape("`$A[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($D,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($D).'</textarea><br>':'<input name="name" id="name" value="'.h($D).'" maxlength="64" autocapitalize="off">')."\n".($fb?html_select("collation",array(""=>"(".lang(86).")")+$fb,$K["collation"]).doc_link(array('sql'=>"charset-charsets.html",'mssql'=>"ms187963.aspx",)):"");?>
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="<?php echo
lang(14),'">
';if(DB!="")echo"<input type='submit' name='drop' value='".lang(115)."'".confirm().">\n";elseif(!$_POST["add_x"]&&$_GET["db"]=="")echo"<input type='image' class='icon' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.2.5' alt='+' title='".lang(96)."'>\n";echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["scheme"])){$K=$_POST;if($_POST&&!$k){$z=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"])query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$z,lang(176));else{$D=trim($K["name"]);$z.=urlencode($D);if($_GET["ns"]=="")query_redirect("CREATE SCHEMA ".idf_escape($D),$z,lang(177));elseif($_GET["ns"]!=$D)query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($D),$z,lang(178));else
redirect($z);}}page_header($_GET["ns"]!=""?lang(59):lang(60),$k);if(!$K)$K["name"]=$_GET["ns"];echo'
<form action="" method="post">
<p><input name="name" id="name" value="',h($K["name"]);?>" autocapitalize="off">
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="<?php echo
lang(14),'">
';if($_GET["ns"]!="")echo"<input type='submit' name='drop' value='".lang(115)."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["call"])){$da=$_GET["call"];page_header(lang(179).": ".h($da),$k);$Lf=routine($da,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$bd=array();$Me=array();foreach($Lf["fields"]as$r=>$l){if(substr($l["inout"],-3)=="OUT")$Me[$r]="@".idf_escape($l["field"])." AS ".idf_escape($l["field"]);if(!$l["inout"]||substr($l["inout"],0,2)=="IN")$bd[]=$r;}if(!$k&&$_POST){$Qa=array();foreach($Lf["fields"]as$x=>$l){if(in_array($x,$bd)){$X=process_input($l);if($X===false)$X="''";if(isset($Me[$x]))$f->query("SET @".idf_escape($l["field"])." = $X");}$Qa[]=(isset($Me[$x])?"@".idf_escape($l["field"]):$X);}$H=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($da)."(".implode(", ",$Qa).")";echo"<p><code class='jush-$w'>".h($H)."</code> <a href='".h(ME)."sql=".urlencode($H)."'>".lang(10)."</a>\n";if(!$f->multi_query($H))echo"<p class='error'>".error()."\n";else{$g=connect();if(is_object($g))$g->select_db(DB);do{$I=$f->store_result();if(is_object($I))select($I,$g);else
echo"<p class='message'>".lang(180,$f->affected_rows)."\n";}while($f->next_result());if($Me)select($f->query("SELECT ".implode(", ",$Me)));}}echo'
<form action="" method="post">
';if($bd){echo"<table cellspacing='0'>\n";foreach($bd
as$x){$l=$Lf["fields"][$x];$D=$l["field"];echo"<tr><th>".$b->fieldName($l);$Y=$_POST["fields"][$D];if($Y!=""){if($l["type"]=="enum")$Y=+$Y;if($l["type"]=="set")$Y=array_sum($Y);}input($l,$Y,(string)$_POST["function"][$D]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="',lang(179),'">
<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];$D=$_GET["name"];$K=$_POST;if($_POST&&!$k&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){$C=($_POST["drop"]?lang(181):($D!=""?lang(182):lang(183)));$_=ME."table=".urlencode($a);$K["source"]=array_filter($K["source"],'strlen');ksort($K["source"]);$Cg=array();foreach($K["source"]as$x=>$X)$Cg[$x]=$K["target"][$x];$K["target"]=$Cg;if($w=="sqlite")queries_redirect($_,$C,recreate_table($a,$a,array(),array(),array(" $D"=>($_POST["drop"]?"":" ".format_foreign_key($K)))));else{$c="ALTER TABLE ".table($a);$Qb="\nDROP ".($w=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($D);if($_POST["drop"])query_redirect($c.$Qb,$_,$C);else{query_redirect($c.($D!=""?"$Qb,":"")."\nADD".format_foreign_key($K),$_,$C);$k=lang(184)."<br>$k";}}}page_header(lang(185),$k,array("table"=>$a),h($a));if($_POST){ksort($K["source"]);if($_POST["add"])$K["source"][]="";elseif($_POST["change"]||$_POST["change-js"])$K["target"]=array();}elseif($D!=""){$Fc=foreign_keys($a);$K=$Fc[$D];$K["source"][]="";}else{$K["table"]=$a;$K["source"]=array("");}$gg=array_keys(fields($a));$Cg=($a===$K["table"]?$gg:array_keys(fields($K["table"])));$_f=array_keys(array_filter(table_status('',true),'fk_support'));echo'
<form action="" method="post">
<p>
';if($K["db"]==""&&$K["ns"]==""){echo
lang(186),':
',html_select("table",$_f,$K["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="',lang(187),'"></noscript>
<table cellspacing="0">
<thead><tr><th>',lang(122),'<th>',lang(123),'</thead>
';$qd=0;foreach($K["source"]as$x=>$X){echo"<tr>","<td>".html_select("source[".(+$x)."]",array(-1=>"")+$gg,$X,($qd==count($K["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".(+$x)."]",$Cg,$K["target"][$x]);$qd++;}echo'</table>
<p>
',lang(88),': ',html_select("on_delete",array(-1=>"")+explode("|",$ve),$K["on_delete"]),' ',lang(87),': ',html_select("on_update",array(-1=>"")+explode("|",$ve),$K["on_update"]),doc_link(array('sql'=>"innodb-foreign-key-constraints.html",'pgsql'=>"sql-createtable.html#SQL-CREATETABLE-REFERENCES",'mssql'=>"ms174979.aspx",'oracle'=>"clauses002.htm#sthref2903",)),'<p>
<input type="submit" value="',lang(14),'">
<noscript><p><input type="submit" name="add" value="',lang(188),'"></noscript>
';}if($D!=""){echo'<input type="submit" name="drop" value="',lang(115),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$K=$_POST;if($_POST&&!$k){$D=trim($K["name"]);$za=" AS\n$K[select]";$_=ME."table=".urlencode($D);$C=lang(189);if($_GET["materialized"])$U="MATERIALIZED VIEW";else{$U="VIEW";if($w=="pgsql"){$lg=table_status($D);$U=($lg?strtoupper($lg["Engine"]):$U);}}if(!$_POST["drop"]&&$a==$D&&$w!="sqlite"&&$U!="MATERIALIZED VIEW")query_redirect(($w=="mssql"?"ALTER":"CREATE OR REPLACE")." VIEW ".table($D).$za,$_,$C);else{$Eg=$D."_adminer_".uniqid();drop_create("DROP $U ".table($a),"CREATE $U ".table($D).$za,"DROP $U ".table($D),"CREATE $U ".table($Eg).$za,"DROP $U ".table($Eg),($_POST["drop"]?substr(ME,0,-1):$_),lang(190),$C,lang(191),$a,$D);}}if(!$_POST&&$a!=""){$K=view($a);$K["name"]=$a;if(!$k)$k=error();}page_header(($a!=""?lang(39):lang(192)),$k,array("table"=>$a),h($a));echo'
<form action="" method="post">
<p>',lang(170),': <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
<p>';textarea("select",$K["select"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="',lang(115),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$hd=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$mg=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");$K=$_POST;if($_POST&&!$k){if($_POST["drop"])query_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),lang(193));elseif(in_array($K["INTERVAL_FIELD"],$hd)&&isset($mg[$K["STATUS"]])){$Qf="\nON SCHEDULE ".($K["INTERVAL_VALUE"]?"EVERY ".q($K["INTERVAL_VALUE"])." $K[INTERVAL_FIELD]".($K["STARTS"]?" STARTS ".q($K["STARTS"]):"").($K["ENDS"]?" ENDS ".q($K["ENDS"]):""):"AT ".q($K["STARTS"]))." ON COMPLETION".($K["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($aa!=""?lang(194):lang(195)),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$Qf.($aa!=$K["EVENT_NAME"]?"\nRENAME TO ".idf_escape($K["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($K["EVENT_NAME"]).$Qf)."\n".$mg[$K["STATUS"]]." COMMENT ".q($K["EVENT_COMMENT"]).rtrim(" DO\n$K[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?lang(196).": ".h($aa):lang(197)),$k);if(!$K&&$aa!=""){$L=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$K=reset($L);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(170),'<td><input name="EVENT_NAME" value="',h($K["EVENT_NAME"]),'" maxlength="64" autocapitalize="off">
<tr><th title="datetime">',lang(198),'<td><input name="STARTS" value="',h("$K[EXECUTE_AT]$K[STARTS]"),'">
<tr><th title="datetime">',lang(199),'<td><input name="ENDS" value="',h($K["ENDS"]),'">
<tr><th>',lang(200),'<td><input type="number" name="INTERVAL_VALUE" value="',h($K["INTERVAL_VALUE"]),'" class="size"> ',html_select("INTERVAL_FIELD",$hd,$K["INTERVAL_FIELD"]),'<tr><th>',lang(106),'<td>',html_select("STATUS",$mg,$K["STATUS"]),'<tr><th>',lang(95),'<td><input name="EVENT_COMMENT" value="',h($K["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$K["ON_COMPLETION"]=="PRESERVE",lang(201)),'</table>
<p>';textarea("EVENT_DEFINITION",$K["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($aa!=""){echo'<input type="submit" name="drop" value="',lang(115),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["procedure"])){$da=$_GET["procedure"];$Lf=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$K=$_POST;$K["fields"]=(array)$K["fields"];if($_POST&&!process_fields($K["fields"])&&!$k){$Eg="$K[name]_adminer_".uniqid();drop_create("DROP $Lf ".idf_escape($da),create_routine($Lf,$K),"DROP $Lf ".idf_escape($K["name"]),create_routine($Lf,array("name"=>$Eg)+$K),"DROP $Lf ".idf_escape($Eg),substr(ME,0,-1),lang(202),lang(203),lang(204),$da,$K["name"]);}page_header(($da!=""?(isset($_GET["function"])?lang(205):lang(206)).": ".h($da):(isset($_GET["function"])?lang(207):lang(208))),$k);if(!$_POST&&$da!=""){$K=routine($da,$Lf);$K["name"]=$da;}$fb=get_vals("SHOW CHARACTER SET");sort($fb);$Mf=routine_languages();echo'
<form action="" method="post" id="form">
<p>',lang(170),': <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
',($Mf?lang(19).": ".html_select("language",$Mf,$K["language"]):""),'<input type="submit" value="',lang(14),'">
<table cellspacing="0" class="nowrap">
';edit_fields($K["fields"],$fb,$Lf);if(isset($_GET["function"])){echo"<tr><td>".lang(209);edit_type("returns",$K["returns"],$fb);}echo'</table>
<p>';textarea("definition",$K["definition"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($da!=""){echo'<input type="submit" name="drop" value="',lang(115),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["sequence"])){$fa=$_GET["sequence"];$K=$_POST;if($_POST&&!$k){$z=substr(ME,0,-1);$D=trim($K["name"]);if($_POST["drop"])query_redirect("DROP SEQUENCE ".idf_escape($fa),$z,lang(210));elseif($fa=="")query_redirect("CREATE SEQUENCE ".idf_escape($D),$z,lang(211));elseif($fa!=$D)query_redirect("ALTER SEQUENCE ".idf_escape($fa)." RENAME TO ".idf_escape($D),$z,lang(212));else
redirect($z);}page_header($fa!=""?lang(213).": ".h($fa):lang(214),$k);if(!$K)$K["name"]=$fa;echo'
<form action="" method="post">
<p><input name="name" value="',h($K["name"]),'" autocapitalize="off">
<input type="submit" value="',lang(14),'">
';if($fa!="")echo"<input type='submit' name='drop' value='".lang(115)."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["type"])){$ga=$_GET["type"];$K=$_POST;if($_POST&&!$k){$z=substr(ME,0,-1);if($_POST["drop"])query_redirect("DROP TYPE ".idf_escape($ga),$z,lang(215));else
query_redirect("CREATE TYPE ".idf_escape(trim($K["name"]))." $K[as]",$z,lang(216));}page_header($ga!=""?lang(217).": ".h($ga):lang(218),$k);if(!$K)$K["as"]="AS ";echo'
<form action="" method="post">
<p>
';if($ga!="")echo"<input type='submit' name='drop' value='".lang(115)."'".confirm().">\n";else{echo"<input name='name' value='".h($K['name'])."' autocapitalize='off'>\n";textarea("as",$K["as"]);echo"<p><input type='submit' value='".lang(14)."'>\n";}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$D=$_GET["name"];$Yg=trigger_options();$K=(array)trigger($D)+array("Trigger"=>$a."_bi");if($_POST){if(!$k&&in_array($_POST["Timing"],$Yg["Timing"])&&in_array($_POST["Event"],$Yg["Event"])&&in_array($_POST["Type"],$Yg["Type"])){$ue=" ON ".table($a);$Qb="DROP TRIGGER ".idf_escape($D).($w=="pgsql"?$ue:"");$_=ME."table=".urlencode($a);if($_POST["drop"])query_redirect($Qb,$_,lang(219));else{if($D!="")queries($Qb);queries_redirect($_,($D!=""?lang(220):lang(221)),queries(create_trigger($ue,$_POST)));if($D!="")queries(create_trigger($ue,$K+array("Type"=>reset($Yg["Type"]))));}}$K=$_POST;}page_header(($D!=""?lang(222).": ".h($D):lang(223)),$k,array("table"=>$a));echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>',lang(224),'<td>',html_select("Timing",$Yg["Timing"],$K["Timing"],"triggerChange(/^".preg_quote($a,"/")."_[ba][iud]$/, '".js_escape($a)."', this.form);"),'<tr><th>',lang(225),'<td>',html_select("Event",$Yg["Event"],$K["Event"],"this.form['Timing'].onchange();"),(in_array("UPDATE OF",$Yg["Event"])?" <input name='Of' value='".h($K["Of"])."' class='hidden'>":""),'<tr><th>',lang(91),'<td>',html_select("Type",$Yg["Type"],$K["Type"]),'</table>
<p>',lang(170),': <input name="Trigger" value="',h($K["Trigger"]);?>" maxlength="64" autocapitalize="off">
<script type="text/javascript">document.getElementById('form')['Timing'].onchange();</script>
<p><?php textarea("Statement",$K["Statement"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($D!=""){echo'<input type="submit" name="drop" value="',lang(115),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["user"])){$ha=$_GET["user"];$of=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$K){foreach(explode(",",($K["Privilege"]=="Grant option"?"":$K["Context"]))as$qb)$of[$qb][$K["Privilege"]]=$K["Comment"];}$of["Server Admin"]+=$of["File access on server"];$of["Databases"]["Create routine"]=$of["Procedures"]["Create routine"];unset($of["Procedures"]["Create routine"]);$of["Columns"]=array();foreach(array("Select","Insert","Update","References")as$X)$of["Columns"][$X]=$of["Tables"][$X];unset($of["Server Admin"]["Usage"]);foreach($of["Tables"]as$x=>$X)unset($of["Databases"][$x]);$fe=array();if($_POST){foreach($_POST["objects"]as$x=>$X)$fe[$X]=(array)$fe[$X]+(array)$_POST["grants"][$x];}$Nc=array();$se="";if(isset($_GET["host"])&&($I=$f->query("SHOW GRANTS FOR ".q($ha)."@".q($_GET["host"])))){while($K=$I->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$K[0],$A)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$A[1],$B,PREG_SET_ORDER)){foreach($B
as$X){if($X[1]!="USAGE")$Nc["$A[2]$X[2]"][$X[1]]=true;if(preg_match('~ WITH GRANT OPTION~',$K[0]))$Nc["$A[2]$X[2]"]["GRANT OPTION"]=true;}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$K[0],$A))$se=$A[1];}}if($_POST&&!$k){$te=(isset($_GET["host"])?q($ha)."@".q($_GET["host"]):"''");if($_POST["drop"])query_redirect("DROP USER $te",ME."privileges=",lang(226));else{$he=q($_POST["user"])."@".q($_POST["host"]);$We=$_POST["pass"];if($We!=''&&!$_POST["hashed"]){$We=$f->result("SELECT PASSWORD(".q($We).")");$k=!$We;}$ub=false;if(!$k){if($te!=$he){$ub=queries(($f->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $he IDENTIFIED BY PASSWORD ".q($We));$k=!$ub;}elseif($We!=$se)queries("SET PASSWORD FOR $he = ".q($We));}if(!$k){$If=array();foreach($fe
as$me=>$Mc){if(isset($_GET["grant"]))$Mc=array_filter($Mc);$Mc=array_keys($Mc);if(isset($_GET["grant"]))$If=array_diff(array_keys(array_filter($fe[$me],'strlen')),$Mc);elseif($te==$he){$qe=array_keys((array)$Nc[$me]);$If=array_diff($qe,$Mc);$Mc=array_diff($Mc,$qe);unset($Nc[$me]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$me,$A)&&(!grant("REVOKE",$If,$A[2]," ON $A[1] FROM $he")||!grant("GRANT",$Mc,$A[2]," ON $A[1] TO $he"))){$k=true;break;}}}if(!$k&&isset($_GET["host"])){if($te!=$he)queries("DROP USER $te");elseif(!isset($_GET["grant"])){foreach($Nc
as$me=>$If){if(preg_match('~^(.+)(\\(.*\\))?$~U',$me,$A))grant("REVOKE",array_keys($If),$A[2]," ON $A[1] FROM $he");}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?lang(227):lang(228)),!$k);if($ub)$f->query("DROP USER $he");}}page_header((isset($_GET["host"])?lang(31).": ".h("$ha@$_GET[host]"):lang(134)),$k,array("privileges"=>array('',lang(62))));if($_POST){$K=$_POST;$Nc=$fe;}else{$K=$_GET+array("host"=>$f->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$K["pass"]=$se;if($se!="")$K["hashed"]=true;$Nc[(DB==""||$Nc?"":idf_escape(addcslashes(DB,"%_\\"))).".*"]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(30),'<td><input name="host" maxlength="60" value="',h($K["host"]),'" autocapitalize="off">
<tr><th>',lang(31),'<td><input name="user" maxlength="16" value="',h($K["user"]),'" autocapitalize="off">
<tr><th>',lang(32),'<td><input name="pass" id="pass" value="',h($K["pass"]),'">
';if(!$K["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$K["hashed"],lang(229),"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'>".lang(62).doc_link(array('sql'=>"grant.html#priv_level"));$r=0;foreach($Nc
as$me=>$Mc){echo'<th>'.($me!="*.*"?"<input name='objects[$r]' value='".h($me)."' size='10' autocapitalize='off'>":"<input type='hidden' name='objects[$r]' value='*.*' size='10'>*.*");$r++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>lang(30),"Databases"=>lang(33),"Tables"=>lang(118),"Columns"=>lang(119),"Procedures"=>lang(230),)as$qb=>$Gb){foreach((array)$of[$qb]as$nf=>$jb){echo"<tr".odd()."><td".($Gb?">$Gb<td":" colspan='2'").' lang="en" title="'.h($jb).'">'.h($nf);$r=0;foreach($Nc
as$me=>$Mc){$D="'grants[$r][".h(strtoupper($nf))."]'";$Y=$Mc[strtoupper($nf)];if($qb=="Server Admin"&&$me!=(isset($Nc["*.*"])?"*.*":".*"))echo"<td>&nbsp;";elseif(isset($_GET["grant"]))echo"<td><select name=$D><option><option value='1'".($Y?" selected":"").">".lang(231)."<option value='0'".($Y=="0"?" selected":"").">".lang(232)."</select>";else
echo"<td align='center'><label class='block'><input type='checkbox' name=$D value='1'".($Y?" checked":"").($nf=="All privileges"?" id='grants-$r-all'":($nf=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$r-all');\""))."></label>";$r++;}}}echo"</table>\n",'<p>
<input type="submit" value="',lang(14),'">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="',lang(115),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$k){$xd=0;foreach((array)$_POST["kill"]as$X){if(kill_process($X))$xd++;}queries_redirect(ME."processlist=",lang(233,$xd),$xd||!$_POST["kill"]);}page_header(lang(104),$k);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" ondblclick="tableClick(event, true);" class="nowrap checkable">
';$r=-1;foreach(process_list()as$r=>$K){if(!$r){echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"");foreach($K
as$x=>$X)echo"<th>$x".doc_link(array('sql'=>"show-processlist.html#processlist_".strtolower($x),'pgsql'=>"monitoring-stats.html#PG-STAT-ACTIVITY-VIEW",'oracle'=>"../b14237/dynviews_2088.htm",));echo"</thead>\n";}echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$K[$w=="sql"?"Id":"pid"],0):"");foreach($K
as$x=>$X)echo"<td>".(($w=="sql"&&$x=="Info"&&preg_match("~Query|Killed~",$K["Command"])&&$X!="")||($w=="pgsql"&&$x=="current_query"&&$X!="<IDLE>")||($w=="oracle"&&$x=="sql_text"&&$X!="")?"<code class='jush-$w'>".shorten_utf8($X,100,"</code>").' <a href="'.h(ME.($K["db"]!=""?"db=".urlencode($K["db"])."&":"")."sql=".urlencode($X)).'">'.lang(234).'</a>':nbsp($X));echo"\n";}echo'</table>
<script type=\'text/javascript\'>tableCheck();</script>
<p>
';if(support("kill")){echo($r+1)."/".lang(235,max_connections()),"<p><input type='submit' value='".lang(236)."'>\n";}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$R=table_status1($a);$v=indexes($a);$m=fields($a);$Fc=column_foreign_keys($a);$pe="";if($R["Oid"]){$pe=($w=="sqlite"?"rowid":"oid");$v[]=array("type"=>"PRIMARY","columns"=>array($pe));}parse_str($_COOKIE["adminer_import"],$ra);$Jf=array();$e=array();$Hg=null;foreach($m
as$x=>$l){$D=$b->fieldName($l);if(isset($l["privileges"]["select"])&&$D!=""){$e[$x]=html_entity_decode(strip_tags($D),ENT_QUOTES);if(is_shortable($l))$Hg=$b->selectLengthProcess();}$Jf+=$l["privileges"];}list($M,$q)=$b->selectColumnsProcess($e,$v);$ld=count($q)<count($M);$Z=$b->selectSearchProcess($m,$v);$De=$b->selectOrderProcess($m,$v);$y=$b->selectLimitProcess();$Kc=($M?implode(", ",$M):"*".($pe?", $pe":"")).convert_fields($e,$m,$M)."\nFROM ".table($a);$Oc=($q&&$ld?"\nGROUP BY ".implode(", ",$q):"").($De?"\nORDER BY ".implode(", ",$De):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$gh=>$K){$za=convert_field($m[key($K)]);$M=array($za?$za:idf_escape(key($K)));$Z[]=where_check($gh,$m);$J=$Ob->select($a,$M,$Z,$M);if($J)echo
reset($J->fetch_row());}exit;}if($_POST&&!$k){$Ah=$Z;if(!$_POST["all"]&&is_array($_POST["check"])){$Va=array();foreach($_POST["check"]as$Ta)$Va[]=where_check($Ta,$m);$Ah[]="((".implode(") OR (",$Va)."))";}$Ah=($Ah?"\nWHERE ".implode(" AND ",$Ah):"");$jf=$ih=null;foreach($v
as$u){if($u["type"]=="PRIMARY"){$jf=array_flip($u["columns"]);$ih=($M?$jf:array());break;}}foreach((array)$ih
as$x=>$X){if(in_array(idf_escape($x),$M))unset($ih[$x]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$ih===array())$H="SELECT $Kc$Ah$Oc";else{$eh=array();foreach($_POST["check"]as$X)$eh[]="(SELECT".limit($Kc,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$m).$Oc,1).")";$H=implode(" UNION ALL ",$eh);}$b->dumpData($a,"table",$H);exit;}if(!$b->selectEmailProcess($Z,$Fc)){if($_POST["save"]||$_POST["delete"]){$I=true;$sa=0;$O=array();if(!$_POST["delete"]){foreach($e
as$D=>$X){$X=process_input($m[$D]);if($X!==null&&($_POST["clone"]||$X!==false))$O[idf_escape($D)]=($X!==false?$X:idf_escape($D));}}if($_POST["delete"]||$O){if($_POST["clone"])$H="INTO ".table($a)." (".implode(", ",array_keys($O)).")\nSELECT ".implode(", ",$O)."\nFROM ".table($a);if($_POST["all"]||($ih===array()&&is_array($_POST["check"]))||$ld){$I=($_POST["delete"]?$Ob->delete($a,$Ah):($_POST["clone"]?queries("INSERT $H$Ah"):$Ob->update($a,$O,$Ah)));$sa=$f->affected_rows;}else{foreach((array)$_POST["check"]as$X){$_h="\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$m);$I=($_POST["delete"]?$Ob->delete($a,$_h,1):($_POST["clone"]?queries("INSERT".limit1($H,$_h)):$Ob->update($a,$O,$_h)));if(!$I)break;$sa+=$f->affected_rows;}}}$C=lang(237,$sa);if($_POST["clone"]&&$I&&$sa==1){$Bd=last_id();if($Bd)$C=lang(156," $Bd");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$C,$I);if(!$_POST["delete"]){edit_form($a,$m,(array)$_POST["fields"],!$_POST["clone"]);page_footer();exit;}}elseif(!$_POST["import"]){if(!$_POST["val"])$k=lang(238);else{$I=true;$sa=0;foreach($_POST["val"]as$gh=>$K){$O=array();foreach($K
as$x=>$X){$x=bracket_escape($x,1);$O[idf_escape($x)]=(preg_match('~char|text~',$m[$x]["type"])||$X!=""?$b->processInput($m[$x],$X):"NULL");}$I=$Ob->update($a,$O," WHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($gh,$m),!($ld||$ih===array())," ");if(!$I)break;$sa+=$f->affected_rows;}queries_redirect(remove_from_uri(),lang(237,$sa),$I);}}elseif(!is_string($_c=get_file("csv_file",true)))$k=upload_error($_c);elseif(!preg_match('~~u',$_c))$k=lang(239);else{cookie("adminer_import","output=".urlencode($ra["output"])."&format=".urlencode($_POST["separator"]));$I=true;$gb=array_keys($m);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$_c,$B);$sa=count($B[0]);$Ob->begin();$Xf=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$L=array();foreach($B[0]as$x=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$Xf]*)$Xf~",$X.$Xf,$Md);if(!$x&&!array_diff($Md[1],$gb)){$gb=$Md[1];$sa--;}else{$O=array();foreach($Md[1]as$r=>$cb)$O[idf_escape($gb[$r])]=($cb==""&&$m[$gb[$r]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$cb))));$L[]=$O;}}$I=(!$L||$Ob->insertUpdate($a,$L,$jf));if($I)$Ob->commit();queries_redirect(remove_from_uri("page"),lang(240,$sa),$I);$Ob->rollback();}}}$wg=$b->tableName($R);if(is_ajax()){page_headers();ob_start();}else
page_header(lang(43).": $wg",$k);$O=null;if(isset($Jf["insert"])||!support("table")){$O="";foreach((array)$_GET["where"]as$X){if(count($Fc[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!preg_match('~[_%]~',$X["val"]))))$O.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$b->selectLinks($R,$O);if(!$e&&support("table"))echo"<p class='error'>".lang(241).($m?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($M,$e);$b->selectSearchPrint($Z,$e,$v);$b->selectOrderPrint($De,$e,$v);$b->selectLimitPrint($y);$b->selectLengthPrint($Hg);$b->selectActionPrint($v);echo"</form>\n";$E=$_GET["page"];if($E=="last"){$Ic=$f->result(count_rows($a,$Z,$ld,$q));$E=floor(max(0,$Ic-1)/$y);}$Uf=$M;if(!$Uf){$Uf[]="*";if($pe)$Uf[]=$pe;}$rb=convert_fields($e,$m,$M);if($rb)$Uf[]=substr($rb,2);$I=$Ob->select($a,$Uf,$Z,$q,$De,$y,$E,true);if(!$I)echo"<p class='error'>".error()."\n";else{if($w=="mssql"&&$E)$I->seek($y*$E);$dc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$L=array();while($K=$I->fetch_assoc()){if($E&&$w=="oracle")unset($K["RNUM"]);$L[]=$K;}if($_GET["page"]!="last"&&+$y&&$q&&$ld&&$w=="sql")$Ic=$f->result(" SELECT FOUND_ROWS()");if(!$L)echo"<p class='message'>".lang(12)."\n";else{$Ha=$b->backwardKeys($a,$wg);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$q&&$M?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(242)."</a>");$ee=array();$Lc=array();reset($M);$wf=1;foreach($L[0]as$x=>$X){if($x!=$pe){$X=$_GET["columns"][key($M)];$l=$m[$M?($X?$X["col"]:current($M)):$x];$D=($l?$b->fieldName($l,$wf):($X["fun"]?"*":$x));if($D!=""){$wf++;$ee[$x]=$D;$d=idf_escape($x);$Xc=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($x);$Gb="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($Xc.($De[0]==$d||$De[0]==$x||(!$De&&$ld&&$q[0]==$d)?$Gb:'')).'">';echo
apply_sql_function($X["fun"],$D)."</a>";echo"<span class='column hidden'>","<a href='".h($Xc.$Gb)."' title='".lang(49)."' class='text'> â†“</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($x)).'\'); return false;" title="'.lang(46).'" class="text jsonly"> =</a>';echo"</span>";}$Lc[$x]=$X["fun"];next($M);}}$Hd=array();if($_GET["modify"]){foreach($L
as$K){foreach($K
as$x=>$X)$Hd[$x]=max($Hd[$x],min(40,strlen(utf8_decode($X))));}}echo($Ha?"<th>".lang(243):"")."</thead>\n";if(is_ajax()){if($y%2==1&&$E%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($L,$Fc)as$de=>$K){$fh=unique_array($L[$de],$v);if(!$fh){$fh=array();foreach($L[$de]as$x=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$x))$fh[$x]=$X;}}$gh="";foreach($fh
as$x=>$X){if(($w=="sql"||$w=="pgsql")&&strlen($X)>64){$x=(strpos($x,'(')?$x:idf_escape($x));$x="MD5(".($w=='sql'&&preg_match("~^utf8_~",$m[$x]["collation"])?$x:"CONVERT($x USING ".charset($f).")").")";$X=md5($X);}$gh.="&".($X!==null?urlencode("where[".bracket_escape($x)."]")."=".urlencode($X):"null%5B%5D=".urlencode($x));}echo"<tr".odd().">".(!$q&&$M?"":"<td>".checkbox("check[]",substr($gh,1),in_array(substr($gh,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($ld||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$gh)."'>".lang(244)."</a>"));foreach($K
as$x=>$X){if(isset($ee[$x])){$l=$m[$x];if($X!=""&&(!isset($dc[$x])||$dc[$x]!=""))$dc[$x]=(is_mail($X)?$ee[$x]:"");$z="";if(preg_match('~blob|bytea|raw|file~',$l["type"])&&$X!="")$z=ME.'download='.urlencode($a).'&field='.urlencode($x).$gh;if(!$z&&$X!==null){foreach((array)$Fc[$x]as$o){if(count($Fc[$x])==1||end($o["source"])==$x){$z="";foreach($o["source"]as$r=>$gg)$z.=where_link($r,$o["target"][$r],$L[$de][$gg]);$z=($o["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($o["db"]),ME):ME).'select='.urlencode($o["table"]).$z;if(count($o["source"])==1)break;}}}if($x=="COUNT(*)"){$z=ME."select=".urlencode($a);$r=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$fh))$z.=where_link($r++,$W["col"],$W["val"],$W["op"]);}foreach($fh
as$rd=>$W)$z.=where_link($r++,$rd,$W);}$X=select_value($X,$z,$l,$Hg);$s=h("val[$gh][".bracket_escape($x)."]");$Y=$_POST["val"][$gh][bracket_escape($x)];$Yb=!is_array($K[$x])&&is_utf8($X)&&$L[$de][$x]==$K[$x]&&!$Lc[$x];$Gg=preg_match('~text|lob~',$l["type"]);if(($_GET["modify"]&&$Yb)||$Y!==null){$Qc=h($Y!==null?$Y:$K[$x]);echo"<td>".($Gg?"<textarea name='$s' cols='30' rows='".(substr_count($K[$x],"\n")+1)."'>$Qc</textarea>":"<input name='$s' value='$Qc' size='$Hd[$x]'>");}else{$Ld=strpos($X,"<i>...</i>");echo"<td id='$s' onclick=\"selectClick(this, event, ".($Ld?2:($Gg?1:0)).($Yb?"":", '".h(lang(245))."'").");\">$X";}}}if($Ha)echo"<td>";$b->backwardKeysPrint($Ha,$L[$de]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($L||$E)&&!is_ajax()){$nc=true;if($_GET["page"]!="last"){if(!+$y)$Ic=count($L);elseif($w!="sql"||!$ld){$Ic=($ld?false:found_rows($R,$Z));if($Ic<max(1e4,2*($E+1)*$y))$Ic=reset(slow_query(count_rows($a,$Z,$ld,$q)));else$nc=false;}}if(+$y&&($Ic===false||$Ic>$y||$E)){echo"<p class='pages'>";$Od=($Ic===false?$E+(count($L)>=$y?2:1):floor(($Ic-1)/$y));if($w!="simpledb"){echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".lang(246)."', '".($E+1)."'), event); return false;\">".lang(246)."</a>:",pagination(0,$E).($E>5?" ...":"");for($r=max(1,$E-4);$r<min($Od,$E+5);$r++)echo
pagination($r,$E);if($Od>0){echo($E+5<$Od?" ...":""),($nc&&$Ic!==false?pagination($Od,$E):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$Od'>".lang(247)."</a>");}echo(($Ic===false?count($L)+1:$Ic-$E*$y)>$y?' <a href="'.h(remove_from_uri("page")."&page=".($E+1)).'" onclick="return !selectLoadMore(this, '.(+$y).', \''.lang(248).'...\');" class="loadmore">'.lang(249).'</a>':'');}else{echo
lang(246).":",pagination(0,$E).($E>1?" ...":""),($E?pagination($E,$E):""),($Od>$E?pagination($E+1,$E).($Od>$E+1?" ...":""):"");}}echo"<p class='count'>\n",($Ic!==false?"(".($nc?"":"~ ").lang(138,$Ic).") ":"");$Lb=($nc?"":"~ ").$Ic;echo
checkbox("all",1,0,lang(250),"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$Lb' : checked); selectCount('selected2', this.checked || !checked ? '$Lb' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>',lang(242),'</legend><div>
<input type="submit" value="',lang(14),'"',($_GET["modify"]?'':' title="'.lang(238).'"'),'>
</div></fieldset>
<fieldset><legend>',lang(114),' <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="',lang(10),'">
<input type="submit" name="clone" value="',lang(234),'">
<input type="submit" name="delete" value="',lang(18),'"',confirm(),'>
</div></fieldset>
';}$Gc=$b->dumpFormat();foreach((array)$_GET["columns"]as$d){if($d["fun"]){unset($Gc['sql']);break;}}if($Gc){print_fieldset("export",lang(64)." <span id='selected2'></span>");$Ne=$b->dumpOutput();echo($Ne?html_select("output",$Ne,$ra["output"])." ":""),html_select("format",$Gc,$ra["format"])," <input type='submit' name='export' value='".lang(64)."'>\n","</div></fieldset>\n";}echo(!$q&&$M?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($b->selectImportPrint()){print_fieldset("import",lang(63),!$L);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ra["format"],1);echo" <input type='submit' name='import' value='".lang(63)."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($dc,'strlen'),$e);echo"<p><input type='hidden' name='token' value='$T'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["variables"])){$lg=isset($_GET["status"]);page_header($lg?lang(106):lang(105));$th=($lg?show_status():show_variables());if(!$th)echo"<p class='message'>".lang(12)."\n";else{echo"<table cellspacing='0'>\n";foreach($th
as$x=>$X){echo"<tr>","<th><code class='jush-".$w.($lg?"status":"set")."'>".h($x)."</code>","<td>".nbsp($X);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$tg=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$D=>$R){json_row("Comment-$D",nbsp($R["Comment"]));if(!is_view($R)){foreach(array("Engine","Collation")as$x)json_row("$x-$D",nbsp($R[$x]));foreach($tg+array("Auto_increment"=>0,"Rows"=>0)as$x=>$X){if($R[$x]!=""){$X=format_number($R[$x]);json_row("$x-$D",($x=="Rows"&&$X&&$R["Engine"]==($ig=="pgsql"?"table":"InnoDB")?"~ $X":$X));if(isset($tg[$x]))$tg[$x]+=($R["Engine"]!="InnoDB"||$x!="Data_free"?$R[$x]:0);}elseif(array_key_exists($x,$R))json_row("$x-$D");}}}foreach($tg
as$x=>$X)json_row("sum-$x",format_number($X));json_row("");}elseif($_GET["script"]=="kill")$f->query("KILL ".number($_POST["kill"]));else{foreach(count_tables($b->databases())as$j=>$X){json_row("tables-$j",$X);json_row("size-$j",db_size($j));}json_row("");}exit;}else{$Ag=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($Ag&&!$k&&!$_POST["search"]){$I=true;$C="";if($w=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$I=truncate_tables($_POST["tables"]);$C=lang(251);}elseif($_POST["move"]){$I=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$C=lang(252);}elseif($_POST["copy"]){$I=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$C=lang(253);}elseif($_POST["drop"]){if($_POST["views"])$I=drop_views($_POST["views"]);if($I&&$_POST["tables"])$I=drop_tables($_POST["tables"]);$C=lang(254);}elseif($w!="sql"){$I=($w=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?"":" ANALYZE"),$_POST["tables"]));$C=lang(255);}elseif(!$_POST["tables"])$C=lang(9);elseif($I=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"])))){while($K=$I->fetch_assoc())$C.="<b>".h($K["Table"])."</b>: ".h($K["Msg_text"])."<br>";}queries_redirect(substr(ME,0,-1),$C,$I);}page_header(($_GET["ns"]==""?lang(33).": ".h(DB):lang(67).": ".h($_GET["ns"])),$k,true);if($b->homepage()){if($_GET["ns"]!==""){echo"<h3 id='tables-views'>".lang(256)."</h3>\n";$_g=tables_list();if(!$_g)echo"<p class='message'>".lang(9)."\n";else{echo"<form action='' method='post'>\n";if(support("table")){echo"<fieldset><legend>".lang(257)." <span id='selected2'></span></legend><div>","<input type='search' name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".lang(46)."'>\n","</div></fieldset>\n";if($_POST["search"]&&$_POST["query"]!="")search_tables();}echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);">';$Mb=doc_link(array('sql'=>'show-table-status.html'));echo'<th>'.lang(118),'<td>'.lang(258).doc_link(array('sql'=>'storage-engines.html')),'<td>'.lang(110).doc_link(array('sql'=>'charset-mysql.html')),'<td>'.lang(259).$Mb,'<td>'.lang(260).$Mb,'<td>'.lang(261).$Mb,'<td>'.lang(55).doc_link(array('sql'=>'example-auto-increment.html')),'<td>'.lang(262).$Mb,(support("comment")?'<td>'.lang(95).$Mb:''),"</thead>\n";$S=0;foreach($_g
as$D=>$U){$wh=($U!==null&&!preg_match('~table~i',$U));echo'<tr'.odd().'><td>'.checkbox(($wh?"views[]":"tables[]"),$D,in_array($D,$Ag,true),"","formUncheck('check-all');"),'<th>'.(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($D).'" title="'.lang(38).'">'.h($D).'</a>':h($D));if($wh){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($D).'" title="'.lang(39).'">'.(preg_match('~materialized~i',$U)?lang(263):lang(117)).'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($D).'" title="'.lang(37).'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",lang(40)),"Index_length"=>array("indexes",lang(121)),"Data_free"=>array("edit",lang(41)),"Auto_increment"=>array("auto_increment=1&create",lang(40)),"Rows"=>array("select",lang(37)),)as$x=>$z){$s=" id='$x-".h($D)."'";echo($z?"<td align='right'>".(support("table")||$x=="Rows"||(support("indexes")&&$x!="Data_length")?"<a href='".h(ME."$z[0]=").urlencode($D)."'$s title='$z[1]'>?</a>":"<span$s>?</span>"):"<td id='$x-".h($D)."'>&nbsp;");}$S++;}echo(support("comment")?"<td id='Comment-".h($D)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".lang(235,count($_g)),"<td>".nbsp($w=="sql"?$f->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$x)echo"<td align='right' id='sum-$x'>&nbsp;";echo"</table>\n";if(!information_schema(DB)){$rh="<input type='submit' value='".lang(264)."'".on_help("'VACUUM'")."> ";$_e="<input type='submit' name='optimize' value='".lang(265)."'".on_help($w=="sql"?"'OPTIMIZE TABLE'":"'VACUUM OPTIMIZE'")."> ";echo"<fieldset><legend>".lang(114)." <span id='selected'></span></legend><div>".($w=="sqlite"?$rh:($w=="pgsql"?$rh.$_e:($w=="sql"?"<input type='submit' value='".lang(266)."'".on_help("'ANALYZE TABLE'")."> ".$_e."<input type='submit' name='check' value='".lang(267)."'".on_help("'CHECK TABLE'")."> "."<input type='submit' name='repair' value='".lang(268)."'".on_help("'REPAIR TABLE'")."> ":"")))."<input type='submit' name='truncate' value='".lang(269)."'".confirm().on_help($w=="sqlite"?"'DELETE'":"'TRUNCATE".($w=="pgsql"?"'":" TABLE'"))."> "."<input type='submit' name='drop' value='".lang(115)."'".confirm().on_help("'DROP TABLE'").">\n";$i=(support("scheme")?$b->schemas():$b->databases());if(count($i)!=1&&$w!="sqlite"){$j=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".lang(270).": ",($i?html_select("target",$i,$j):'<input name="target" value="'.h($j).'" autocapitalize="off">')," <input type='submit' name='move' value='".lang(271)."'>",(support("copy")?" <input type='submit' name='copy' value='".lang(272)."'>":""),"\n";}echo"<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^(tables|views)\[/));".(support("table")?" selectCount('selected2', formChecked(this, /^tables\[/) || $S);":"")."\">\n";echo"<input type='hidden' name='token' value='$T'>\n","</div></fieldset>\n";}echo"</form>\n","<script type='text/javascript'>tableCheck();</script>\n";}echo'<p class="links"><a href="'.h(ME).'create=">'.lang(65)."</a>\n",(support("view")?'<a href="'.h(ME).'view=">'.lang(192)."</a>\n":""),(support("materializedview")?'<a href="'.h(ME).'view=&amp;materialized=1">'.lang(273)."</a>\n":"");if(support("routine")){echo"<h3 id='routines'>".lang(131)."</h3>\n";$Nf=routines();if($Nf){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.lang(170).'<td>'.lang(91).'<td>'.lang(209)."<td>&nbsp;</thead>\n";odd('');foreach($Nf
as$K){echo'<tr'.odd().'>','<th><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($K["ROUTINE_NAME"]).'">'.h($K["ROUTINE_NAME"]).'</a>','<td>'.h($K["ROUTINE_TYPE"]),'<td>'.h($K["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($K["ROUTINE_NAME"]).'">'.lang(124)."</a>";}echo"</table>\n";}echo'<p class="links">'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.lang(208).'</a>':'').'<a href="'.h(ME).'function=">'.lang(207)."</a>\n";}if(support("sequence")){echo"<h3 id='sequences'>".lang(274)."</h3>\n";$Yf=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema() ORDER BY sequence_name");if($Yf){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(170)."</thead>\n";odd('');foreach($Yf
as$X)echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."sequence='>".lang(214)."</a>\n";}if(support("type")){echo"<h3 id='user-types'>".lang(275)."</h3>\n";$ph=types();if($ph){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(170)."</thead>\n";odd('');foreach($ph
as$X)echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."type='>".lang(218)."</a>\n";}if(support("event")){echo"<h3 id='events'>".lang(132)."</h3>\n";$L=get_rows("SHOW EVENTS");if($L){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(170)."<td>".lang(276)."<td>".lang(198)."<td>".lang(199)."<td></thead>\n";foreach($L
as$K){echo"<tr>","<th>".h($K["Name"]),"<td>".($K["Execute at"]?lang(277)."<td>".$K["Execute at"]:lang(200)." ".$K["Interval value"]." ".$K["Interval field"]."<td>$K[Starts]"),"<td>$K[Ends]",'<td><a href="'.h(ME).'event='.urlencode($K["Name"]).'">'.lang(124).'</a>';}echo"</table>\n";$lc=$f->result("SELECT @@event_scheduler");if($lc&&$lc!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($lc)."\n";}echo'<p class="links"><a href="'.h(ME).'event=">'.lang(197)."</a>\n";}if($_g)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}page_footer();