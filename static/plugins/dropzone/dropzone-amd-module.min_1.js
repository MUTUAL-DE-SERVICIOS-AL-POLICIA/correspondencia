!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):a(jQuery)}(function(a){function b(a){return a?c(a):void 0}function c(a){for(var c in b.prototype)a[c]=b.prototype[c];return a}var d={exports:{}};return d.exports=b,b.prototype.on=function(a,b){return this._callbacks=this._callbacks||{},(this._callbacks[a]=this._callbacks[a]||[]).push(b),this},b.prototype.once=function(a,b){function c(){d.off(a,c),b.apply(this,arguments)}var d=this;return this._callbacks=this._callbacks||{},b._off=c,this.on(a,c),this},b.prototype.off=b.prototype.removeListener=b.prototype.removeAllListeners=function(a,b){this._callbacks=this._callbacks||{};var c=this._callbacks[a];if(!c)return this;if(1==arguments.length)return delete this._callbacks[a],this;var d=c.indexOf(b._off||b);return~d&&c.splice(d,1),this},b.prototype.emit=function(a){this._callbacks=this._callbacks||{};var b=[].slice.call(arguments,1),c=this._callbacks[a];if(c){c=c.slice(0);for(var d=0,e=c.length;e>d;++d)c[d].apply(this,b)}return this},b.prototype.listeners=function(a){return this._callbacks=this._callbacks||{},this._callbacks[a]||[]},b.prototype.hasListeners=function(a){return!!this.listeners(a).length},function(){var c,e,f,g,h,i,j={}.hasOwnProperty,k=function(a,b){function c(){this.constructor=a}for(var d in b)j.call(b,d)&&(a[d]=b[d]);return c.prototype=b.prototype,a.prototype=new c,a.__super__=b.prototype,a},l=[].slice;e="undefined"!=typeof b&&null!==b?b:require("emitter"),h=function(){},c=function(a){function b(a,d){var e,f,g;if(this.element=a,this.version=b.version,this.defaultOptions.previewTemplate=this.defaultOptions.previewTemplate.replace(/\n*/g,""),this.clickableElements=[],this.listeners=[],this.files=[],"string"==typeof this.element&&(this.element=document.querySelector(this.element)),!this.element||null==this.element.nodeType)throw new Error("Invalid dropzone element.");if(this.element.dropzone)throw new Error("Dropzone already attached.");if(b.instances.push(this),a.dropzone=this,e=null!=(g=b.optionsForElement(this.element))?g:{},this.options=c({},this.defaultOptions,e,null!=d?d:{}),this.options.forceFallback||!b.isBrowserSupported())return this.options.fallback.call(this);if(null==this.options.url&&(this.options.url=this.element.getAttribute("action")),!this.options.url)throw new Error("No URL provided.");if(this.options.acceptedFiles&&this.options.acceptedMimeTypes)throw new Error("You can't provide both 'acceptedFiles' and 'acceptedMimeTypes'. 'acceptedMimeTypes' is deprecated.");this.options.acceptedMimeTypes&&(this.options.acceptedFiles=this.options.acceptedMimeTypes,delete this.options.acceptedMimeTypes),this.options.method=this.options.method.toUpperCase(),(f=this.getExistingFallback())&&f.parentNode&&f.parentNode.removeChild(f),this.previewsContainer=this.options.previewsContainer?b.getElement(this.options.previewsContainer,"previewsContainer"):this.element,this.options.clickable&&(this.clickableElements=this.options.clickable===!0?[this.element]:b.getElements(this.options.clickable,"clickable")),this.init()}var c;return k(b,a),b.prototype.events=["drop","dragstart","dragend","dragenter","dragover","dragleave","selectedfiles","addedfile","removedfile","thumbnail","error","processing","processingmultiple","uploadprogress","totaluploadprogress","sending","sendingmultiple","success","successmultiple","canceled","canceledmultiple","complete","completemultiple","reset","maxfilesexceeded"],b.prototype.defaultOptions={url:null,method:"post",withCredentials:!1,parallelUploads:2,uploadMultiple:!1,maxFilesize:256,paramName:"file",createImageThumbnails:!0,maxThumbnailFilesize:10,thumbnailWidth:100,thumbnailHeight:100,maxFiles:null,params:{},clickable:!0,ignoreHiddenFiles:!0,acceptedFiles:null,acceptedMimeTypes:null,autoProcessQueue:!0,addRemoveLinks:!1,previewsContainer:null,dictDefaultMessage:"Drop files here to upload",dictFallbackMessage:"Your browser does not support drag'n'drop file uploads.",dictFallbackText:"Please use the fallback form below to upload your files like in the olden days.",dictFileTooBig:"File is too big ({{filesize}}MB). Max filesize: {{maxFilesize}}MB.",dictInvalidFileType:"You can't upload files of this type.",dictResponseError:"Server responded with {{statusCode}} code.",dictCancelUpload:"Cancel upload",dictCancelUploadConfirmation:"Are you sure you want to cancel this upload?",dictRemoveFile:"Remove file",dictRemoveFileConfirmation:null,dictMaxFilesExceeded:"You can only upload {{maxFiles}} files.",accept:function(a,b){return b()},init:function(){return h},forceFallback:!1,fallback:function(){var a,c,d,e,f,g;for(this.element.className=""+this.element.className+" dz-browser-not-supported",g=this.element.getElementsByTagName("div"),e=0,f=g.length;f>e;e++)a=g[e],/(^| )dz-message($| )/.test(a.className)&&(c=a,a.className="dz-message");return c||(c=b.createElement('<div class="dz-message"><span></span></div>'),this.element.appendChild(c)),d=c.getElementsByTagName("span")[0],d&&(d.textContent=this.options.dictFallbackMessage),this.element.appendChild(this.getFallbackForm())},resize:function(a){var b,c,d;return b={srcX:0,srcY:0,srcWidth:a.width,srcHeight:a.height},c=a.width/a.height,d=this.options.thumbnailWidth/this.options.thumbnailHeight,a.height<this.options.thumbnailHeight||a.width<this.options.thumbnailWidth?(b.trgHeight=b.srcHeight,b.trgWidth=b.srcWidth):c>d?(b.srcHeight=a.height,b.srcWidth=b.srcHeight*d):(b.srcWidth=a.width,b.srcHeight=b.srcWidth/d),b.srcX=(a.width-b.srcWidth)/2,b.srcY=(a.height-b.srcHeight)/2,b},drop:function(){return this.element.classList.remove("dz-drag-hover")},dragstart:h,dragend:function(){return this.element.classList.remove("dz-drag-hover")},dragenter:function(){return this.element.classList.add("dz-drag-hover")},dragover:function(){return this.element.classList.add("dz-drag-hover")},dragleave:function(){return this.element.classList.remove("dz-drag-hover")},selectedfiles:function(){return this.element===this.previewsContainer?this.element.classList.add("dz-started"):void 0},reset:function(){return this.element.classList.remove("dz-started")},addedfile:function(a){var c=this;return a.previewElement=b.createElement(this.options.previewTemplate),a.previewTemplate=a.previewElement,this.previewsContainer.appendChild(a.previewElement),a.previewElement.querySelector("[data-dz-name]").textContent=a.name,a.previewElement.querySelector("[data-dz-size]").innerHTML=this.filesize(a.size),this.options.addRemoveLinks&&(a._removeLink=b.createElement('<a class="dz-remove" href="javascript:undefined;">'+this.options.dictRemoveFile+"</a>"),a._removeLink.addEventListener("click",function(d){return d.preventDefault(),d.stopPropagation(),a.status===b.UPLOADING?b.confirm(c.options.dictCancelUploadConfirmation,function(){return c.removeFile(a)}):c.options.dictRemoveFileConfirmation?b.confirm(c.options.dictRemoveFileConfirmation,function(){return c.removeFile(a)}):c.removeFile(a)}),a.previewElement.appendChild(a._removeLink)),this._updateMaxFilesReachedClass()},removedfile:function(a){var b;return null!=(b=a.previewElement)&&b.parentNode.removeChild(a.previewElement),this._updateMaxFilesReachedClass()},thumbnail:function(a,b){var c;return a.previewElement.classList.remove("dz-file-preview"),a.previewElement.classList.add("dz-image-preview"),c=a.previewElement.querySelector("[data-dz-thumbnail]"),c.alt=a.name,c.src=b},error:function(a,b){return a.previewElement.classList.add("dz-error"),a.previewElement.querySelector("[data-dz-errormessage]").textContent=b},processing:function(a){return a.previewElement.classList.add("dz-processing"),a._removeLink?a._removeLink.textContent=this.options.dictCancelUpload:void 0},processingmultiple:h,uploadprogress:function(a,b){return a.previewElement.querySelector("[data-dz-uploadprogress]").style.width=""+b+"%"},totaluploadprogress:h,sending:h,sendingmultiple:h,success:function(a){return a.previewElement.classList.add("dz-success")},successmultiple:h,canceled:function(a){return this.emit("error",a,"Upload canceled.")},canceledmultiple:h,complete:function(a){return a._removeLink?a._removeLink.textContent=this.options.dictRemoveFile:void 0},completemultiple:h,maxfilesexceeded:h,previewTemplate:'<div class="dz-preview dz-file-preview">\n  <div class="dz-details">\n    <div class="dz-filename"><span data-dz-name></span></div>\n    <div class="dz-size" data-dz-size></div>\n    <img data-dz-thumbnail />\n  </div>\n  <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>\n  <div class="dz-success-mark"><span>✔</span></div>\n  <div class="dz-error-mark"><span>✘</span></div>\n  <div class="dz-error-message"><span data-dz-errormessage></span></div>\n</div>'},c=function(){var a,b,c,d,e,f,g;for(d=arguments[0],c=2<=arguments.length?l.call(arguments,1):[],f=0,g=c.length;g>f;f++){b=c[f];for(a in b)e=b[a],d[a]=e}return d},b.prototype.getAcceptedFiles=function(){var a,b,c,d,e;for(d=this.files,e=[],b=0,c=d.length;c>b;b++)a=d[b],a.accepted&&e.push(a);return e},b.prototype.getRejectedFiles=function(){var a,b,c,d,e;for(d=this.files,e=[],b=0,c=d.length;c>b;b++)a=d[b],a.accepted||e.push(a);return e},b.prototype.getQueuedFiles=function(){var a,c,d,e,f;for(e=this.files,f=[],c=0,d=e.length;d>c;c++)a=e[c],a.status===b.QUEUED&&f.push(a);return f},b.prototype.getUploadingFiles=function(){var a,c,d,e,f;for(e=this.files,f=[],c=0,d=e.length;d>c;c++)a=e[c],a.status===b.UPLOADING&&f.push(a);return f},b.prototype.init=function(){var a,c,d,e,f,g,h,i=this;for("form"===this.element.tagName&&this.element.setAttribute("enctype","multipart/form-data"),this.element.classList.contains("dropzone")&&!this.element.querySelector(".dz-message")&&this.element.appendChild(b.createElement('<div class="dz-default dz-message"><span>'+this.options.dictDefaultMessage+"</span></div>")),this.clickableElements.length&&(d=function(){return i.hiddenFileInput&&document.body.removeChild(i.hiddenFileInput),i.hiddenFileInput=document.createElement("input"),i.hiddenFileInput.setAttribute("type","file"),i.hiddenFileInput.setAttribute("multiple","multiple"),null!=i.options.acceptedFiles&&i.hiddenFileInput.setAttribute("accept",i.options.acceptedFiles),i.hiddenFileInput.style.visibility="hidden",i.hiddenFileInput.style.position="absolute",i.hiddenFileInput.style.top="0",i.hiddenFileInput.style.left="0",i.hiddenFileInput.style.height="0",i.hiddenFileInput.style.width="0",document.body.appendChild(i.hiddenFileInput),i.hiddenFileInput.addEventListener("change",function(){var a;return a=i.hiddenFileInput.files,a.length&&(i.emit("selectedfiles",a),i.handleFiles(a)),d()})},d()),this.URL=null!=(g=window.URL)?g:window.webkitURL,h=this.events,e=0,f=h.length;f>e;e++)a=h[e],this.on(a,this.options[a]);return this.on("uploadprogress",function(){return i.updateTotalUploadProgress()}),this.on("removedfile",function(){return i.updateTotalUploadProgress()}),this.on("canceled",function(a){return i.emit("complete",a)}),c=function(a){return a.stopPropagation(),a.preventDefault?a.preventDefault():a.returnValue=!1},this.listeners=[{element:this.element,events:{dragstart:function(a){return i.emit("dragstart",a)},dragenter:function(a){return c(a),i.emit("dragenter",a)},dragover:function(a){return c(a),i.emit("dragover",a)},dragleave:function(a){return i.emit("dragleave",a)},drop:function(a){return c(a),i.drop(a),i.emit("drop",a)},dragend:function(a){return i.emit("dragend",a)}}}],this.clickableElements.forEach(function(a){return i.listeners.push({element:a,events:{click:function(c){return a!==i.element||c.target===i.element||b.elementInside(c.target,i.element.querySelector(".dz-message"))?i.hiddenFileInput.click():void 0}}})}),this.enable(),this.options.init.call(this)},b.prototype.destroy=function(){var a;return this.disable(),this.removeAllFiles(!0),(null!=(a=this.hiddenFileInput)?a.parentNode:void 0)&&(this.hiddenFileInput.parentNode.removeChild(this.hiddenFileInput),this.hiddenFileInput=null),delete this.element.dropzone},b.prototype.updateTotalUploadProgress=function(){var a,b,c,d,e,f,g,h;if(d=0,c=0,a=this.getAcceptedFiles(),a.length){for(h=this.getAcceptedFiles(),f=0,g=h.length;g>f;f++)b=h[f],d+=b.upload.bytesSent,c+=b.upload.total;e=100*d/c}else e=100;return this.emit("totaluploadprogress",e,c,d)},b.prototype.getFallbackForm=function(){var a,c,d,e;return(a=this.getExistingFallback())?a:(d='<div class="dz-fallback">',this.options.dictFallbackText&&(d+="<p>"+this.options.dictFallbackText+"</p>"),d+='<input type="file" name="'+this.options.paramName+(this.options.uploadMultiple?"[]":"")+'" '+(this.options.uploadMultiple?'multiple="multiple"':void 0)+' /><button type="submit">Upload!</button></div>',c=b.createElement(d),"FORM"!==this.element.tagName?(e=b.createElement('<form action="'+this.options.url+'" enctype="multipart/form-data" method="'+this.options.method+'"></form>'),e.appendChild(c)):(this.element.setAttribute("enctype","multipart/form-data"),this.element.setAttribute("method",this.options.method)),null!=e?e:c)},b.prototype.getExistingFallback=function(){var a,b,c,d,e,f;for(b=function(a){var b,c,d;for(c=0,d=a.length;d>c;c++)if(b=a[c],/(^| )fallback($| )/.test(b.className))return b},f=["div","form"],d=0,e=f.length;e>d;d++)if(c=f[d],a=b(this.element.getElementsByTagName(c)))return a},b.prototype.setupEventListeners=function(){var a,b,c,d,e,f,g;for(f=this.listeners,g=[],d=0,e=f.length;e>d;d++)a=f[d],g.push(function(){var d,e;d=a.events,e=[];for(b in d)c=d[b],e.push(a.element.addEventListener(b,c,!1));return e}());return g},b.prototype.removeEventListeners=function(){var a,b,c,d,e,f,g;for(f=this.listeners,g=[],d=0,e=f.length;e>d;d++)a=f[d],g.push(function(){var d,e;d=a.events,e=[];for(b in d)c=d[b],e.push(a.element.removeEventListener(b,c,!1));return e}());return g},b.prototype.disable=function(){var a,b,c,d,e;for(this.clickableElements.forEach(function(a){return a.classList.remove("dz-clickable")}),this.removeEventListeners(),d=this.files,e=[],b=0,c=d.length;c>b;b++)a=d[b],e.push(this.cancelUpload(a));return e},b.prototype.enable=function(){return this.clickableElements.forEach(function(a){return a.classList.add("dz-clickable")}),this.setupEventListeners()},b.prototype.filesize=function(a){var b;return a>=1e11?(a/=1e11,b="TB"):a>=1e8?(a/=1e8,b="GB"):a>=1e5?(a/=1e5,b="MB"):a>=100?(a/=100,b="KB"):(a=10*a,b="b"),"<strong>"+Math.round(a)/10+"</strong> "+b},b.prototype._updateMaxFilesReachedClass=function(){return this.options.maxFiles&&this.getAcceptedFiles().length>=this.options.maxFiles?this.element.classList.add("dz-max-files-reached"):this.element.classList.remove("dz-max-files-reached")},b.prototype.drop=function(a){var b,c;a.dataTransfer&&(b=a.dataTransfer.files,this.emit("selectedfiles",b),b.length&&(c=a.dataTransfer.items,c&&c.length&&(null!=c[0].webkitGetAsEntry||null!=c[0].getAsEntry)?this.handleItems(c):this.handleFiles(b)))},b.prototype.handleFiles=function(a){var b,c,d,e;for(e=[],c=0,d=a.length;d>c;c++)b=a[c],e.push(this.addFile(b));return e},b.prototype.handleItems=function(a){var b,c,d,e;for(d=0,e=a.length;e>d;d++)c=a[d],null!=c.webkitGetAsEntry?(b=c.webkitGetAsEntry(),b.isFile?this.addFile(c.getAsFile()):b.isDirectory&&this.addDirectory(b,b.name)):this.addFile(c.getAsFile())},b.prototype.accept=function(a,c){return a.size>1024*1024*this.options.maxFilesize?c(this.options.dictFileTooBig.replace("{{filesize}}",Math.round(a.size/1024/10.24)/100).replace("{{maxFilesize}}",this.options.maxFilesize)):b.isValidFile(a,this.options.acceptedFiles)?this.options.maxFiles&&this.getAcceptedFiles().length>=this.options.maxFiles?(c(this.options.dictMaxFilesExceeded.replace("{{maxFiles}}",this.options.maxFiles)),this.emit("maxfilesexceeded",a)):this.options.accept.call(this,a,c):c(this.options.dictInvalidFileType)},b.prototype.addFile=function(a){var c=this;return a.upload={progress:0,total:a.size,bytesSent:0},this.files.push(a),a.status=b.ADDED,this.emit("addedfile",a),this.options.createImageThumbnails&&a.type.match(/image.*/)&&a.size<=1024*1024*this.options.maxThumbnailFilesize&&this.createThumbnail(a),this.accept(a,function(b){return b?(a.accepted=!1,c._errorProcessing([a],b)):c.enqueueFile(a)})},b.prototype.enqueueFiles=function(a){var b,c,d;for(c=0,d=a.length;d>c;c++)b=a[c],this.enqueueFile(b);return null},b.prototype.enqueueFile=function(a){var c=this;if(a.accepted=!0,a.status!==b.ADDED)throw new Error("This file can't be queued because it has already been processed or was rejected.");return a.status=b.QUEUED,this.options.autoProcessQueue?setTimeout(function(){return c.processQueue()},1):void 0},b.prototype.addDirectory=function(a,b){var c,d,e=this;return c=a.createReader(),d=function(c){var d,f;for(d=0,f=c.length;f>d;d++)a=c[d],a.isFile?a.file(function(a){return e.options.ignoreHiddenFiles&&"."===a.name.substring(0,1)?void 0:(a.fullPath=""+b+"/"+a.name,e.addFile(a))}):a.isDirectory&&e.addDirectory(a,""+b+"/"+a.name)},c.readEntries(d,function(a){return"undefined"!=typeof console&&null!==console?"function"==typeof console.log?console.log(a):void 0:void 0})},b.prototype.removeFile=function(a){return a.status===b.UPLOADING&&this.cancelUpload(a),this.files=i(this.files,a),this.emit("removedfile",a),0===this.files.length?this.emit("reset"):void 0},b.prototype.removeAllFiles=function(a){var c,d,e,f;for(null==a&&(a=!1),f=this.files.slice(),d=0,e=f.length;e>d;d++)c=f[d],(c.status!==b.UPLOADING||a)&&this.removeFile(c);return null},b.prototype.createThumbnail=function(a){var b,c=this;return b=new FileReader,b.onload=function(){var d;return d=new Image,d.onload=function(){var b,e,f,g,h,i,j,k;return a.width=d.width,a.height=d.height,f=c.options.resize.call(c,a),null==f.trgWidth&&(f.trgWidth=c.options.thumbnailWidth),null==f.trgHeight&&(f.trgHeight=c.options.thumbnailHeight),b=document.createElement("canvas"),e=b.getContext("2d"),b.width=f.trgWidth,b.height=f.trgHeight,e.drawImage(d,null!=(h=f.srcX)?h:0,null!=(i=f.srcY)?i:0,f.srcWidth,f.srcHeight,null!=(j=f.trgX)?j:0,null!=(k=f.trgY)?k:0,f.trgWidth,f.trgHeight),g=b.toDataURL("image/png"),c.emit("thumbnail",a,g)},d.src=b.result},b.readAsDataURL(a)},b.prototype.processQueue=function(){var a,b,c,d;if(b=this.options.parallelUploads,c=this.getUploadingFiles().length,a=c,!(c>=b)&&(d=this.getQueuedFiles(),d.length>0)){if(this.options.uploadMultiple)return this.processFiles(d.slice(0,b-c));for(;b>a;){if(!d.length)return;this.processFile(d.shift()),a++}}},b.prototype.processFile=function(a){return this.processFiles([a])},b.prototype.processFiles=function(a){var c,d,e;for(d=0,e=a.length;e>d;d++)c=a[d],c.processing=!0,c.status=b.UPLOADING,this.emit("processing",c);return this.options.uploadMultiple&&this.emit("processingmultiple",a),this.uploadFiles(a)},b.prototype._getFilesWithXhr=function(a){var b,c;return c=function(){var c,d,e,f;for(e=this.files,f=[],c=0,d=e.length;d>c;c++)b=e[c],b.xhr===a&&f.push(b);return f}.call(this)},b.prototype.cancelUpload=function(a){var c,d,e,f,g,h,i;if(a.status===b.UPLOADING){for(d=this._getFilesWithXhr(a.xhr),e=0,g=d.length;g>e;e++)c=d[e],c.status=b.CANCELED;for(a.xhr.abort(),f=0,h=d.length;h>f;f++)c=d[f],this.emit("canceled",c);this.options.uploadMultiple&&this.emit("canceledmultiple",d)}else((i=a.status)===b.ADDED||i===b.QUEUED)&&(a.status=b.CANCELED,this.emit("canceled",a),this.options.uploadMultiple&&this.emit("canceledmultiple",[a]));return this.options.autoProcessQueue?this.processQueue():void 0},b.prototype.uploadFile=function(a){return this.uploadFiles([a])},b.prototype.uploadFiles=function(a){var d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,A,B,C,D,E=this;for(r=new XMLHttpRequest,s=0,w=a.length;w>s;s++)d=a[s],d.xhr=r;r.open(this.options.method,this.options.url,!0),r.withCredentials=!!this.options.withCredentials,o=null,f=function(){var b,c,e;for(e=[],b=0,c=a.length;c>b;b++)d=a[b],e.push(E._errorProcessing(a,o||E.options.dictResponseError.replace("{{statusCode}}",r.status),r));return e},p=function(b){var c,e,f,g,h,i,j,k,l;if(null!=b)for(e=100*b.loaded/b.total,f=0,i=a.length;i>f;f++)d=a[f],d.upload={progress:e,total:b.total,bytesSent:b.loaded};else{for(c=!0,e=100,g=0,j=a.length;j>g;g++)d=a[g],(100!==d.upload.progress||d.upload.bytesSent!==d.upload.total)&&(c=!1),d.upload.progress=e,d.upload.bytesSent=d.upload.total;if(c)return}for(l=[],h=0,k=a.length;k>h;h++)d=a[h],l.push(E.emit("uploadprogress",d,e,d.upload.bytesSent));return l},r.onload=function(c){var d;if(a[0].status!==b.CANCELED&&4===r.readyState){if(o=r.responseText,r.getResponseHeader("content-type")&&~r.getResponseHeader("content-type").indexOf("application/json"))try{o=JSON.parse(o)}catch(e){c=e,o="Invalid JSON response from server."}return p(),200<=(d=r.status)&&300>d?E._finished(a,o,c):f()}},r.onerror=function(){return a[0].status!==b.CANCELED?f():void 0},n=null!=(A=r.upload)?A:r,n.onprogress=p,i={Accept:"application/json","Cache-Control":"no-cache","X-Requested-With":"XMLHttpRequest"},this.options.headers&&c(i,this.options.headers);for(g in i)h=i[g],r.setRequestHeader(g,h);if(e=new FormData,this.options.params){B=this.options.params;for(m in B)q=B[m],e.append(m,q)}for(t=0,x=a.length;x>t;t++)d=a[t],this.emit("sending",d,r,e);if(this.options.uploadMultiple&&this.emit("sendingmultiple",a,r,e),"FORM"===this.element.tagName)for(C=this.element.querySelectorAll("input, textarea, select, button"),u=0,y=C.length;y>u;u++)j=C[u],k=j.getAttribute("name"),l=j.getAttribute("type"),(!l||"checkbox"!==(D=l.toLowerCase())&&"radio"!==D||j.checked)&&e.append(k,j.value);for(v=0,z=a.length;z>v;v++)d=a[v],e.append(""+this.options.paramName+(this.options.uploadMultiple?"[]":""),d,d.name);return r.send(e)},b.prototype._finished=function(a,c,d){var e,f,g;for(f=0,g=a.length;g>f;f++)e=a[f],e.status=b.SUCCESS,this.emit("success",e,c,d),this.emit("complete",e);return this.options.uploadMultiple&&(this.emit("successmultiple",a,c,d),this.emit("completemultiple",a)),this.options.autoProcessQueue?this.processQueue():void 0},b.prototype._errorProcessing=function(a,c,d){var e,f,g;for(f=0,g=a.length;g>f;f++)e=a[f],e.status=b.ERROR,this.emit("error",e,c,d),this.emit("complete",e);return this.options.uploadMultiple&&(this.emit("errormultiple",a,c,d),this.emit("completemultiple",a)),this.options.autoProcessQueue?this.processQueue():void 0},b}(e),c.version="3.7.0",c.options={},c.optionsForElement=function(a){return a.id?c.options[f(a.id)]:void 0},c.instances=[],c.forElement=function(a){if("string"==typeof a&&(a=document.querySelector(a)),null==(null!=a?a.dropzone:void 0))throw new Error("No Dropzone found for given element. This is probably because you're trying to access it before Dropzone had the time to initialize. Use the `init` option to setup any additional observers on your Dropzone.");return a.dropzone},c.autoDiscover=!0,c.discover=function(){var a,b,d,e,f,g;for(document.querySelectorAll?d=document.querySelectorAll(".dropzone"):(d=[],a=function(a){var b,c,e,f;for(f=[],c=0,e=a.length;e>c;c++)b=a[c],/(^| )dropzone($| )/.test(b.className)?f.push(d.push(b)):f.push(void 0);return f},a(document.getElementsByTagName("div")),a(document.getElementsByTagName("form"))),g=[],e=0,f=d.length;f>e;e++)b=d[e],c.optionsForElement(b)!==!1?g.push(new c(b)):g.push(void 0);return g},c.blacklistedBrowsers=[/opera.*Macintosh.*version\/12/i],c.isBrowserSupported=function(){var a,b,d,e,f;if(a=!0,window.File&&window.FileReader&&window.FileList&&window.Blob&&window.FormData&&document.querySelector)if("classList"in document.createElement("a"))for(f=c.blacklistedBrowsers,d=0,e=f.length;e>d;d++)b=f[d],b.test(navigator.userAgent)&&(a=!1);else a=!1;else a=!1;return a},i=function(a,b){var c,d,e,f;for(f=[],d=0,e=a.length;e>d;d++)c=a[d],c!==b&&f.push(c);return f},f=function(a){return a.replace(/[\-_](\w)/g,function(a){return a[1].toUpperCase()})},c.createElement=function(a){var b;return b=document.createElement("div"),b.innerHTML=a,b.childNodes[0]},c.elementInside=function(a,b){if(a===b)return!0;for(;a=a.parentNode;)if(a===b)return!0;return!1},c.getElement=function(a,b){var c;if("string"==typeof a?c=document.querySelector(a):null!=a.nodeType&&(c=a),null==c)throw new Error("Invalid `"+b+"` option provided. Please provide a CSS selector or a plain HTML element.");return c},c.getElements=function(a,b){var c,d,e,f,g,h,i,j;if(a instanceof Array){e=[];try{for(f=0,h=a.length;h>f;f++)d=a[f],e.push(this.getElement(d,b))}catch(k){c=k,e=null}}else if("string"==typeof a)for(e=[],j=document.querySelectorAll(a),g=0,i=j.length;i>g;g++)d=j[g],e.push(d);else null!=a.nodeType&&(e=[a]);if(null==e||!e.length)throw new Error("Invalid `"+b+"` option provided. Please provide a CSS selector, a plain HTML element or a list of those.");return e},c.confirm=function(a,b,c){return window.confirm(a)?b():null!=c?c():void 0},c.isValidFile=function(a,b){var c,d,e,f,g;if(!b)return!0;for(b=b.split(","),d=a.type,c=d.replace(/\/.*$/,""),f=0,g=b.length;g>f;f++)if(e=b[f],e=e.trim(),"."===e.charAt(0)){if(-1!==a.name.indexOf(e,a.name.length-e.length))return!0}else if(/\/\*$/.test(e)){if(c===e.replace(/\/.*$/,""))return!0}else if(d===e)return!0;return!1},"undefined"!=typeof a&&null!==a&&(a.fn.dropzone=function(a){return this.each(function(){return new c(this,a)})}),"undefined"!=typeof d&&null!==d?d.exports=c:window.Dropzone=c,c.ADDED="added",c.QUEUED="queued",c.ACCEPTED=c.QUEUED,c.UPLOADING="uploading",c.PROCESSING=c.UPLOADING,c.CANCELED="canceled",c.ERROR="error",c.SUCCESS="success",g=function(a,b){var c,d,e,f,g,h,i,j,k;if(e=!1,k=!0,d=a.document,j=d.documentElement,c=d.addEventListener?"addEventListener":"attachEvent",i=d.addEventListener?"removeEventListener":"detachEvent",h=d.addEventListener?"":"on",f=function(c){return"readystatechange"!==c.type||"complete"===d.readyState?(("load"===c.type?a:d)[i](h+c.type,f,!1),!e&&(e=!0)?b.call(a,c.type||c):void 0):void 0},g=function(){var a;try{j.doScroll("left")}catch(b){return a=b,setTimeout(g,50),void 0}return f("poll")},"complete"!==d.readyState){if(d.createEventObject&&j.doScroll){try{k=!a.frameElement}catch(l){}k&&g()}return d[c](h+"DOMContentLoaded",f,!1),d[c](h+"readystatechange",f,!1),a[c](h+"load",f,!1)}},c._autoDiscoverFunction=function(){return c.autoDiscover?c.discover():void 0},g(window,c._autoDiscoverFunction)}.call(this),d.exports});