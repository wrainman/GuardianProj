var websitename = { src: flashRootLocation + 'Site/logo/worstveldslingextra.swf' };

sIFR.useStyleCheck = true;

sIFR.activate(websitename);

sIFR.replace(websitename, {
  selector: '#textlogo',
  css: '.sIFR-root a { background:transparent; color: #6B2F12; padding:10px;  font-size:65px; cursor:pointer; font-weight:normal; text-decoration:none; text-align:left; text-indent:10px;}.sIFR-root a:hover {  color: #A5441A;}.sIFR-root { background:transparent; color: #6B2F12; padding:10px;  font-size:65px; cursor:pointer; font-weight:bold; text-decoration:none; text-align:left; text-indent:10px;}',
  wmode: 'transparent',
  filters: {
 	 GradientBevelFilter:{ 
		distance:8,
		angle:298,
		ratios:[0,128,255],
		colors:[0xffffff,0xffffff,0xffffff],
		alphas:[1,0,1],
		blurX:2,
		blurY:2,
		strength:1,
		quality:3,
		type:'inner',
		knockout:false
  		},
  		
 	 GradientBevelFilter:{ 
		distance:2,
		angle:63,
		ratios:[25,128,245],
		colors:[0x311A1F,0x6E423E,0x311A1F],
		alphas:[1,0,1],
		blurX:2,
		blurY:2,
		strength:1,
		quality:3,
		type:'inner',
		knockout:false
  		},
  		
    DropShadowFilter: {
	  hideObject:false, 
	  strength:0.64,
 	  blurY:2, 
 	  blurX:2, 
	  knockout:false, 
 	  inner:false, 
 	  quality:3, 
 	  alpha:.75, 
 	  color:0xffffff,
 	  angle:45, 
 	  distance:0 
	  }
	  
  
  }

});

/*


	GlowFilter: {	  
	  strength:7.5, 
	  blurY:1.5, 
	  blurX:1.5, 
	  knockout:false, 
	  inner:false, 
	  quality:3, 
	  alpha:1, 
	  color:0xffffff
      },

   BevelFilter: {
	  type:'inner',
	  blurY:2, 
	  blurX:2, 
	  knockout:false, 
	  strength:2.3, 
	  quality:3, 
	  shadowAlpha:1, 
	  shadowColor:0x402229, 
	  highlightAlpha:1, 
	  highlightColor:0x6E423E, 
	  angle:90, 
	  distance:2
 	  },


GradientBevelFilter distance="2" angle="63" ratios="[25,128,245]" colors="[0x000000,0xFF0000,0x000000]" alphas="[1,0,1]" blurX="2" blurY="2" strength="1" quality="3" type="inner" knockout="false"/>
BevelFilter distance="2" angle="90" highlightColor="0xFABD0A" highlightAlpha="1" shadowColor="0xCC3300" shadowAlpha="1" blurX="2" blurY="2" strength="2.3" quality="3" type="inner" knockout="false"/>
GlowFilter blurX="2" blurY="2" color="0x88E1FF" alpha="1" strength="7.5" quality="3" inner="false" knockout="false"/>
DropShadowFilter distance="0" angle="45" color="0x000000" alpha="1" blurX="10" blurY="10" strength="0.64" quality="3" inner="false" knockout="false" hideObject="false"/>


    DropShadowFilter: {
	  hideObject:false, 
	  strength:0.75,
 	  blurY:2, 
 	  blurX:2, 
	  knockout:false, 
 	  inner:true, 
 	  quality:3, 
 	  alpha:.75, 
 	  color:'#000000',
 	  angle:45, 
 	  distance:2,	  
	  },
	GlowFilter: {	  
	  strength:1.35, 
	  blurY:9, 
	  blurX:9, 
	  knockout:false, 
	  inner:true, 
	  quality:3, 
	  alpha:1, 
	  color:'#000000',
      },
   BevelFilter: {
	  type:'full',
	  blurY:2, 
	  blurX:2, 
	  knockout:false, 
	  strength:0.75, 
	  quality:3, 
	  shadowAlpha:1, 
	  shadowColor:'#000000', 
	  highlightAlpha:1, 
	  highlightColor:'#ffffff', 
	  angle:45, 
	  distance:2,
 	  },
   GlowFilter: {
	  strength:3.72, 
	  blurY:5, 
	  blurX:5, 
	  knockout:false,
	  inner:false,
	  quality:3, 
	  alpha:1, 
	  color:'#FF6600', 
 	  },
    DropShadowFilter: {
	  hideObject:false, 
	  strength:0.65,
 	  blurY:15, 
 	  blurX:15, 
	  knockout:false, 
 	  inner:false, 
 	  quality:3, 
 	  alpha:1, 
 	  color:'#333333',
 	  angle:45, 
 	  distance:11,	  
	  },


*/