/*
	author:zsb1987@foxmail.com
	date:2013-08-22
	version:v1.0.0
	
	@description:

	
*/

!function ($) {

    "use strict"; // jshint ;_;

    /* MODAL MANAGER CLASS DEFINITION
	* ====================== */

    var ModalManager = function (element, options) {
        this.init(element, options);
    };

	
    ModalManager.prototype = {

        constructor: ModalManager,

        init: function (element, options) {
            this.$element = $(element);
            this.options = $.extend({}, $.fn.modalmanager.defaults, this.$element.data(), typeof options == 'object' && options);
            this.stack = [];
            this.backdropCount = 0;
        },
        appendModal: function (modal) {
            this.stack.push(modal);

            var that = this;

            modal.$element.on('show.bs.modal',targetIsSelf( function (e) {
                //show action			
                }));

            modal.$element.on('hidden.bs.modal', targetIsSelf(function (e) {
                that.removeModal(modal);
            }));
        },

        hasOpenModal: function () {
            for (var i = 0; i < this.stack.length; i++){
                if (this.stack[i].isShown) return true;
            }

            return false;
        },

        removeModal: function (modal) {
            if(modal['removeDomWhenHide']){
                modal.$element.remove();
                modal.$element.off('.modalmanager');
                this.stack.splice(this.getIndexOfModal(modal), 1);
            }
        },

        getModalAt: function (index) {
            return this.stack[index];
        },

        getIndexOfModal: function (modal) {
            for (var i = 0; i < this.stack.length; i++){
                if (modal === this.stack[i]) return i;
            }
        },
        //add by zhangshibin ,to close the top modal
        getTopModal: function(){
            var topModal;
            for (var i = 0; i < this.stack.length; i++){
                if (this.stack[i].isShown) {
                    topModal = this.stack[i];
                }
            }
            return topModal;
        }
    };

    /* PRIVATE METHODS
	* ======================= */
    // make sure the event target is the modal itself in order to prevent
    // other components such as tabsfrom triggering the modal manager.
    // if Boostsrap namespaced events, this would not be needed.
    function targetIsSelf(callback){
        return function (e) {
            if (this === e.target){
                return callback.apply(this, arguments);
            }
        }
    }


    /* MODAL MANAGER PLUGIN DEFINITION
	* ======================= */

    $.fn.modalmanager = function (option, args) {
        return this.each(function () {
            var $this = $(this),
            data = $this.data('modalmanager');

            if (!data) $this.data('modalmanager', (data = new ModalManager(this, option)));
            if (typeof option === 'string') data[option].apply(data, [].concat(args));
        })
    };

    $.fn.modalmanager.defaults = {
        backdropLimit: 999,
        resize: true,
        spinner: '<div class="loading-spinner fade" style="width: 200px; margin-left: -100px;"><div class="progress progress-striped active"><div class="bar" style="width: 100%;"></div></div></div>'
    };

    $.fn.modalmanager.Constructor = ModalManager
	
	
}(jQuery);

/*
	dialog弹出层
*/
(function($,w){
    w.gDialog = w.gDialog || {};
    var dialog = w.gDialog;
    var modalStart='<div class="modal fade" tabindex="-1" role="dialog"  aria-hidden="true" data-backdrop="static" id="@{modalId}">'+
    '<div class="modal-dialog"> <div class="modal-content">';
    var modalEnd='</div></div>';
    var headTemplate='<div class="modal-header">'+
    '<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>'+
    '<h4 class="modal-title">@{title}</h4> </div>';
	

    var alertTemplate='<div class="modal-header"><h4 class="modal-title">@{title}</h4> </div><div class="modal-body">'+
    '<p>@{msgContent}</p></div>  <div class="modal-footer"><button role="button" class="btn btn-primary JConfirmBtn">确定</button></div>';

    var confirmTemplate='<div class="modal-header"><h4 class="modal-title">@{title}</h4> </div><div class="modal-body">'+
    '<p>@{msgContent}</p></div>  <div class="modal-footer"><button role="button" class="btn btn-success JConfirmBtn">确定</button>'+
    '<button role="button" class="btn JCancelBtn">取消</button></div>';
    $.extend(dialog,{
        fCreate:function(config, callback){
            if(!config) return;
            if(!config.modalId){
                config.modalId=this.fGenModalId();
            }
            var modalContent=modalStart;
            //if has title,then render head
            if(config.title){
                modalContent+=headTemplate;
            }else{
                modalContent+=modalEnd;
            }	
            var modalContent=gUtils.fRenderTemplate(modalContent,config);
            var $modalContent=$(modalContent).appendTo('body');
			
            if(config.url && config.url!=''){
                $.ajax({
                    url : config.url,
                    dataType : 'html',
                    cache:false,
                    async:false,
                    data:config.param || "",
                    success : function(data,textStatus){
                        $modalContent.find('.modal-content').append(data);
                        if(callback){
                            callback();
                        }
                    }
                });
            }else if(config.content){
                $modalContent.find('.modal-content').append(config.content);
            }

            config.dragConfig=$.extend({
                handle:'.modal-header'
            },config.dragConfig);
			
			
            var modalConfig={
                keyboard: false,
                show:false
            };
            var width=config['width'];
            if(width){
                modalConfig['width']=width;
            }
            $modalContent.modal(modalConfig);	

            var modal= $modalContent.data('bs.modal');
            this.appendToModalManager(modal,config);
            return modal;
        },
        appendToModalManager: function(modal,options){
            var manager =$('body').data('modalmanager');
            if(!manager){
                manager=$('body').modalmanager().data('modalmanager');
            }

            //modal can be reuse
            if(!options['reuse']){
                modal['removeDomWhenHide']=true;
            }

            if($.fn.draggable){
                var dragConfig=$.extend({/*handle:'.modal-header',*/
                    cursor:'move',
                    scroll:false,
                    containment:'window'
                },options.dragConfig);
                if(modal.$element.find(dragConfig.handle).length>0){
                    modal.$element.draggable(dragConfig);
                }
            }
			
            manager.appendModal(modal);
        },
        fClose:function(id){
            var modalManager=$('body').modalmanager().data('modalmanager');
            if(modalManager!=null){
                if(modalManager.hasOpenModal()){
                    modalManager.getTopModal().hide();
                }
            }
        },



        fAlert:function(msg,callback){
            var data={
                title:'警告',
                msgContent:msg
            };
            var alertContent=gUtils.fRenderTemplate(alertTemplate,data);
            var config={
                content:alertContent,
                width:600
            };
            var modal=this.fCreate(config);
            modal.$element.find(".JConfirmBtn").click(function(){
                modal.hide();
                if(callback){
                    callback();
                }
            });
            modal.show();
        },
        fConfirm:function(title,content,callback){
            var data={
                title:title,
                msgContent:content
            };
            var confirmContent=gUtils.fRenderTemplate(confirmTemplate,data);
            var config={
                content:confirmContent,
                width:600
            };
            var modal=this.fCreate(config);
            modal.$element.find(".JConfirmBtn").click(function(){
                modal.hide();
                if(callback){
                    callback(true);
                }
            });
            modal.$element.find(".JCancelBtn").click(function(){
                modal.hide();
                if(callback){
                    callback(false);
                }
            });
            modal.show();
        },

        fGenModalId:function(){
            return 'modal-'+new Date().getTime();
        }
    });
})(jQuery,window);

