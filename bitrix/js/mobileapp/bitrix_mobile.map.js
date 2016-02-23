{"version":3,"file":"bitrix_mobile.min.js","sources":["bitrix_mobile.js"],"names":["window","app","MobileDatabase","this","tableList","db","openDatabase","prototype","init","ReadyDevice","BX","proxy","isTableExists","tableName","callback","that","tableListCallback","length","i","toUpperCase","getTableList","callbackFunc","query","values","res","count","items","tbl_name","createTable","params","action","str","getQuery","success","fail","dropTable","addRow","getRows","updateRows","queryData","deleteRows","where","filter","select","fields","insert","insertFields","set","updateFields","strQuery","getFilter","getValues","getFieldPair","fieldsString","field","j","name","unique","getValueArrayString","getKeyString","valueTemplate","replace","operator","pairsRow","keyWord","key","pair","defaultResult","result","valuesItem","resultValues","keyField","transaction","tx","executeSql","results","originalResult","len","rows","item","getResponseObject","BXCordovaPlugin","sync","pluginName","useSyncPlugin","callbackIndex","callbacks","dataBrigePath","mobileSiteDir","available","platform","isDatabaseSupported","_that","document","addEventListener","RegisterCallBack","func","CallBackExecute","index","prepareParams","convertBoolean","convertBooleanFlag","console","log","clone","obj","copyObject","_obj","l","Object","toString","call","exec","funcName","pluginParams","JSON","stringify","syncPlugin","execute","device","cordova","Cordova","webrtc","UI","parent","state","OUTGOING_CALL","INCOMING_CALL","CONVERSATION","FAIL_CALL","show","options","close","showLocalVideo","createPeerConnection","createOffer","createAnswer","addIceCandidates","setRemoteDescription","getUserMedia","onReconnect","setEventListeners","notificationBar","actionSheet","titleAction","refresh","textPanelAction","showSlidingPanel","changeAccount","showDocumentsCache","showButtonPanel","hideSlidingPanel","hideButtonPanel","showSelectPicker","hideSelectPicker","updateButtonBadge","openBarCodeScanner","openPhotos","removeAllCache","loadPageBlank","loadPageStart","confirm","confirmData","title","text","buttons","accept","navigator","notification","alert","alertData","button","openLeft","setPageTitle","removeTableCache","tableId","table_id","showDatePicker","hideDatePicker","showInput","showInputLoading","loading_status","status","clearInput","hideInput","reload","url","location","href","flipScreen","removeButtons","openBXTable","TABLE_SETTINGS","table_settings","markmode","insertCallback","data","BitrixMobile","Utils","htmlspecialchars","openDocument","showPopupLoader","hidePopupLoader","changeCurPageParams","getPageParams","enableInVersion","menuCreate","menuShow","menuHide","ver","strict","api_version","appVersion","e","parseInt","checkOpenStatus","asyncRequest","openUrl","onCustomEvent","eventName","needPrepare","delegate","params_pre","getVar","passVar","variable","evalVar","Bitrix24Android","receiveStringValue","takePhoto","quality","correctOrientation","targetWidth","targetHeight","sourceType","source","mediaType","allowEdit","saveToPhotoAlbum","destinationType","undefined","camera","getPicture","openMenu","showModalDialog","closeModalDialog","closeController","addButtons","openContent","closeMenu","loadPage","page_id","setPageID","pageID","openNewPage","loadMenu","openTable","skipSpecialChars","openUserList","addUserListButton","pullDown","pullDownLoadingStop","enableScroll","enable_status","enableCaptureKeyboard","enableLoadingScreen","showLoadingScreen","hideLoadingScreen","visibleNavigationBar","visible","visibleToolBar","enableSliderMenu","enable","enableRight","setCounters","counters","setBadge","number","refreshPanelPage","pagename","page","setPanelPages","pages","getToken","dt","token","ajax","post","mobile_action","device_name","model","uuid","device_token","device_type","sessid","bitrix_sessid","BasicAuth","userSuccessCallback","userFailCallback","failture","authParams","check_url","parse","sessid_md5","message","logOut","xhr","XMLHttpRequest","open","onreadystatechange","readyState","send","getCurrentLocation","geolocationSuccess","geolocationError","onsuccess","onerror","geolocation","getCurrentPosition","setVibrate","ms","vibrate","bindloadPageBlank","body","intentLink","hash","target","tagName","findParent","indexOf","autoResizeForm","textarea","pageContainer","maxHeight","formContainer","parentNode","origTextareaHeight","ownerDocument","defaultView","getComputedStyle","getPropertyValue","origFormContainerHeight","setAttribute","currentTextareaHeight","hiddenTextarea","createElement","className","style","height","visibility","position","left","appendChild","resize","resizeDelay","value","scrollHeight","bottom","scrollTo","documentElement","setTimeout","resetAutoResize","getAttribute","showHiddenImages","images","getElementsByTagName","image","realImage","isElementVisibleOnScreen","src","element","coords","getElementCoords","windowTop","pageYOffset","scrollTop","windowBottom","clientHeight","top","offsetHeight","topVisible","bottomVisible","isElementVisibleOn2Screens","windowHeight","box","getBoundingClientRect","originTop","originLeft","pageXOffset","type","isString","isArray","fastClick","bindDelegate","elem","isTarget","handler","h","delegateEvent","FastButton","bind","LazyLoad","hidden","error","inited","loaded","types","background","clearImages","showImages","checkOwnVisibility","_initImage","node","isImageVisible","backgroundImage","registerImage","id","isImageVisibleCallback","isNotEmptyString","push","isFunction","registerImages","ids","toLowerCase","getImageById","removeImage","util","deleteFromArray","onScroll","BitrixAnimation","animate","start","finish","propName","progress","Math","round","step","animateProgress","Date","delta","transition","transitions","linear","duration","timer","setInterval","clearInterval","complete","delay","makeEaseInOut","makeEaseOut","elastic","pow","cos","PI","quad","cubic","quart","quint","circ","sin","acos","back","bounce","a","b","addCustomEvent","lang","k","pathname","search","BXMobileApp","Page","MobileAjaxWrapper","method","failure_callback","progress_callback","offline","processData","Init","callback_failure","callback_progress","callback_loadstart","loadstart_callback","callback_loadend","loadend_callback","Wrap","timeout","dataType","defer","response","bFailed","RepeatRequest","onfailure","errorCode","requestStatus","load_callback","error_callback","abort_callback","auth_data","response_ii","OfflineAlert","DoNothing","BMAjaxWrapper","MobileNetworkStatus","_this","networkState","network","connection","Connection","UNKNOWN","NONE","BMNetworkStatus","addListener","el","listener","useCapture","destroy","removeEventListener","handleEvent","event","attachEvent","detachEvent","isTouch","events","touchEvents","fastButton","onTouchStart","onTouchMove","onClick","stopPropagation","cancelBubble","startX","touches","clientX","startY","clientY","abs","reset","preventDefault","clickbuster","preventGhostClick","x","y","coordinates","pop","splice","returnValue"],"mappings":"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"}