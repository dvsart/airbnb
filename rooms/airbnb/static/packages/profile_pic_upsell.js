! function(e, o, i) {
    "use strict";
    var t = AIR.Views.BaseView.extend({
        className: "upsell-welcome",
        events: {
            "click .upload-using-webcam": "webcamHandler",
            "click .upload-with-facebook": "fbButtonHandler",
            "click .upload-with-weibo": "weiboButtonHandler",
            "click .upload-with-google": "googleButtonhandler",
            "click .upload-photo": "uploadHandler",
            "click .decline-add-photo": "declineHandler"
        },
        initialize: function(o) {
            this.trackingEventName = this.options.tracking_event_name || "pf_pic_uploader", this.trackingAdditionalInfo = this.options.tracking_additional_info || {}, this.selectMethod = this.flow + "_select_method", this.isObsoleteBrowser = e.browser.msie && parseInt(e.browser.version, 10) < 9
        },
        postRender: function() {
            this.containerDiv = this.$(".upload-container")
        },
        webcamHandler: function(e) {
            Airbnb.Tracking.logEvent(this.extendTrackingInfo({
                section: this.selectMethod,
                operation: "click",
                method: "take_a_photo"
            })), this.openConfirmationModal({
                uploadMethod: "take_a_photo"
            })
        },
        fbButtonHandler: function(e) {
            this.containerDiv.addClass("loading"), Airbnb.Tracking.logEvent(this.extendTrackingInfo({
                section: this.selectMethod,
                operation: "click",
                method: "connect_with_facebook"
            })), Airbnb.Utils.fbButtonClickHandlerFactory("signup profile pic", this.onFacebookSave.bind(this))(e)
        },
        onFacebookSave: function() {
            this.openConfirmationModal({
                uploadMethod: "connect_with_facebook"
            })
        },
        weiboButtonHandler: function(e) {
            this.containerDiv.addClass("loading"), Airbnb.Tracking.queueEvent(this.extendTrackingInfo({
                section: this.selectMethod,
                operation: "click",
                method: "connect_with_weibo"
            }))
        },
        googleButtonhandler: function(e) {
            this.containerDiv.addClass("loading"), Airbnb.Tracking.queueEvent(this.extendTrackingInfo({
                section: this.selectMethod,
                operation: "click",
                method: "connect_with_google"
            }))
        },
        uploadHandler: function(e) {
            Airbnb.Tracking.logEvent(this.extendTrackingInfo({
                section: this.selectMethod,
                operation: "click",
                method: "upload_from_computer"
            })), this.initIFrame()
        },
        declineHandler: function(e) {
            Airbnb.Tracking.logEvent(this.extendTrackingInfo({
                section: this.selectMethod,
                operation: "click",
                method: "decline_add_photo"
            }))
        },
        initIFrame: function() {
            if (this.iframeContext = this.$("#upload_form_frame")[0].contentWindow, this.iframeContext.ProfilePicWidget = this, this.clearCurrentImg(), this.iframeContext.jQuery("#user_profile_pic").on("change", this.uploadFileStart.bind(this)), this.isObsoleteBrowser) this.$(".upload-photo-button").addClass("hide"), this.$("#upload_form_frame").removeClass("hide");
            else {
                var e = this.iframeContext.jQuery("#user_profile_pic");
                e.trigger("click")
            }
        },
        clearCurrentImg: function() {
            this.iframeContext.$('input[type="file"]').val(null)
        },
        uploadFileStart: function(o) {
            var i = e(o.currentTarget).val();
            this.containerDiv.addClass("loading"), this.isValidFile(i) ? this.getUploadForm().submit() : (this.containerDiv.removeClass("loading"), this.$(".error-alert").addClass("slide-down"), this.getUploadForm()[0].reset())
        },
        isValidFile: function(e) {
            return e && e.match(/([^\\]+)\.(jpeg|jpg|png)$/i)
        },
        getUploadForm: function() {
            return this.iframeContext.jQuery("#ajax_upload_form")
        },
        uploadFileCallback: function() {
            this.openConfirmationModal({
                uploadMethod: "upload_from_computer"
            })
        },
        cleanUpModal: function() {
            this.confirmationModalView.cleanup(), this.confirmationModalView = null, this.containerDiv.removeClass("hide")
        },
        extendTrackingInfo: function(o) {
            return {
                event_name: this.trackingEventName,
                event_data: e.extend(o, this.trackingAdditionalInfo)
            }
        }
    });
    i("profile_pic_upsell/base_modal", t)
}(jQuery, require, provide), ! function(e, o, i) {
    "use strict";
    var t = !window.Airbnb.isO20 && o("o2").Modal,
        l = o("profile_pic_upsell/base_modal"),
        a = l.extend({
            template: "profile_pic_uploader/profile_pic_upsell_modal",
            className: "profile-pic-upsell-modal",
            initialize: function(e) {
                t && (this.trackingEventName = this.options.tracking_event_name || "profile_pic_upsell_modal", this.flow = this.options.flow || "profile_pic_upsell", this.upsellBodyTemplate = "profile_pic_uploader/profile_pic_upsell_modal_body", this.upsellBodyData = {
                    showWeiboButton: this.options.showWeiboButton,
                    showFacebookButton: this.options.showFacebookButton,
                    showGoogleButton: this.options.showGoogleButton && !(this.options.showFacebookButton && this.options.showWeiboButton),
                    isContactHostFlow: "contact_host_profile_pic_upsell" === this.flow,
                    flow: this.flow
                }, this.isNewbie = this.options.isNewbie || !1, this.confirmationTemplate = "profile_pic_uploader/confirmation_modal_body", this.welcomeTemplate = "profile_pic_uploader/upsell_welcome_body", this.thanksIllustration = "https://a2.muscache.com/airbnb/static/signinup/hello@2x-eaed0a73f29f17ba25ceb5daf56bacc4.png", l.prototype.initialize.apply(this, [e]))
            },
            getRenderData: function() {
                return this.upsellBodyData
            },
            delegateClickEvents: function() {
                var o = e(".profile-pic-upsell-modal");
                o.on("click", ".retake", this.retakeHandler.bind(this)), o.on("click", ".confirmation", this.confirmationHandler.bind(this)), o.on("click", ".complete-profile", this.completeProfileHandler.bind(this)), o.on("click", ".continue-browsing", this.continueBrowsingHandler.bind(this))
            },
            postRender: function() {
                this.containerDiv = this.$(".upload-container"), this.openModal()
            },
            replaceModalContents: function(o) {
                var i = JST[o.templateName](o.templateData);
                i = e.trim(i), this.$el.find(".modal-content").html(i), this.containerDiv = this.$(".upload-container")
            },
            openModal: function() {
                this.modal = new t(this.$el.find(".profile-pic-upsell-modal")), this.setElement(e(".profile-pic-upsell-modal")), this.delegateEvents(), this.delegateClickEvents(), this.modal.open(), this.modal.on("close", function() {
                    this.trigger("modal-closed")
                }.bind(this))
            },
            uploadFileCallback: function() {
                this.$(".error-alert").removeClass("slide-down"), this.openConfirmationModal({
                    uploadMethod: "upload_from_computer",
                    node: this.$el.parent()
                })
            },
            openConfirmationModal: function(e) {
                this.fetchPicture().always(function(o) {
                    var i, t;
                    0 !== o.id && o.large_url ? (this.replaceModalContents({
                        templateName: this.confirmationTemplate,
                        templateData: {}
                    }), i = this.$el.find(".profile_pic_container"), i.addClass("loading"), t = this.$(".guest-picture"), t.on("load", function() {
                        i.removeClass("loading")
                    }), t.attr("src", o.large_url), this.setUserPic(o)) : (this.containerDiv.removeClass("loading"), this.$(".error-alert").addClass("slide-down"), Airbnb.Tracking.logEvent(this.extendTrackingInfo({
                        operation: "error",
                        section: this.selectMethod,
                        method: e.uploadMethod,
                        error_type: "profile_pic_upload_failure"
                    })))
                }.bind(this))
            },
            setUserPic: function(e) {
                this.modalUserPicUrl = e.large_url, Airbnb.header.setThumbnailUrl(e.large_url)
            },
            fetchPicture: function() {
                return e.getJSON("/users/profile_pic", function(e) {
                    0 !== e.id && Airbnb.Tracking.logEvent({
                        event_name: "edit_profile",
                        event_data: {
                            operation: "add",
                            page: "media",
                            section: "profile_photo",
                            picture_id: e.id
                        }
                    })
                })
            },
            declineHandler: function(e) {
                l.prototype.declineHandler.apply(this), this.isNewbie ? this.replaceModalContents({
                    templateName: this.welcomeTemplate,
                    templateData: this.welcomeTemplateData()
                }) : this.modal.close()
            },
            retakeHandler: function() {
                this.replaceModalContents({
                    templateName: this.upsellBodyTemplate,
                    templateData: this.upsellBodyData
                }), Airbnb.Tracking.logEvent(this.extendTrackingInfo({
                    section: this.flow + "_redo",
                    operation: "click"
                }))
            },
            confirmationHandler: function() {
                Airbnb.Tracking.logEvent(this.extendTrackingInfo({
                    section: this.flow + "_accept",
                    operation: "click"
                })), this.replaceModalContents({
                    templateName: this.welcomeTemplate,
                    templateData: this.welcomeTemplateData()
                })
            },
            welcomeTemplateData: function() {
                var e = amplify.store("user_first_name");
                return {
                    header_text: this.modalUserPicUrl ? I18n.t("profile_pic_upsell.after_pic_upload_welcome_header", {
                        guest_first_name: e
                    }) : I18n.t("profile_pic_upsell.skipped_pic_upload_welcome_header", {
                        guest_first_name: e
                    }),
                    text_below: this.modalUserPicUrl ? this.options.didUploadTextBelow : this.options.didNotUploadTextBelow,
                    no_first_name_header_text: I18n.t("shared.Welcome_to_Airbnb"),
                    hasStoredFirstName: void 0 !== e,
                    guest_first_name: e,
                    modal_userpic_url: this.modalUserPicUrl ? this.modalUserPicUrl : this.thanksIllustration
                }
            },
            completeProfileHandler: function(e) {
                Airbnb.Tracking.queueEvent(this.extendTrackingInfo({
                    section: this.flow + "_welcome",
                    operation: "click",
                    method: "complete_profile"
                }))
            },
            continueBrowsingHandler: function(e) {
                this.modal.close(), Airbnb.Tracking.logEvent(this.extendTrackingInfo({
                    section: this.flow + "_welcome",
                    operation: "click",
                    method: "decline_complete_profile"
                }))
            }
        });
    i("profile_pic_upsell/upsell_modal", a)
}($, require, provide), ! function(e, o, i) {
    "use strict";
    var t = o("profile_pic_upsell/upsell_modal"),
        l = t.extend({
            template: "profile_pic_uploader/upsell_welcome_modal",
            className: "profile-pic-upsell-modal",
            initialize: function(e) {
                this.fetchPicture().always(function(e) {
                    0 != e.id && e.large_url && this.setUserPic(e), this.render()
                }.bind(this)), I18n.extend({
                    "profile_pic_uploader.take_photo": "Take Photo",
                    "profile_pic_uploader.upload_photo": "Upload Photo",
                    "profile_pic_uploader.connect_facebook": "Use Facebook",
                    "profile_pic_uploader.take_or_upload_photo": "Take or upload a photo",
                    "profile_pic_uploader.confirm your photo": "Confirm your photo",
                    "profile_pic_uploader.make sure your face is visible": "Make sure your face is clearly visible in the photo.",
                    "shared.Cancel": "Cancel",
                    "profile_pic_uploader.save and continue": "Save and Continue",
                    "profile_pic_uploader.smile": "Smile!",
                    "profile_pic_uploader.error": "There was an error uploading your picture. Please try again.",
                    "profile_pic_upsell.upload_error_alert": "We couldn't upload your photo. Please try again.",
                    "profile_pic_uploader.change photo": "Change Photo",
                    "shared.Continue": "Continue",
                    "profile_pic_uploader.is_this_you": "How Does This Look?",
                    "profile_pic_uploader.choose_other": "Choose Other",
                    "shared.save": "Save",
                    "profile_pic_uploader.file_type_error": "This file type is unsupported. This tool supports PNG and JPG files.",
                    "profile_pic_upsell.add_photo_header": "Get Started With a Profile Photo",
                    "profile_pic_upsell.add_photo_subheader": "Add a photo so potential hosts can put a face to the name once you're ready to book.",
                    "profile_pic_upsell.connect_facebook": "Connect With Facebook",
                    "profile_pic_upsell.connect_weibo": "Connect With Weibo",
                    "profile_pic_upsell.connect_google": "Connect With Google",
                    "profile_pic_upsell.upload_a_photo": "Upload a Photo",
                    "profile_pic_upsell.decline_add_photo": "Not Now",
                    "profile_pic_upsell.after_pic_upload_welcome_header": "Looking Good, %{guest_first_name}!",
                    "profile_pic_upsell.skipped_pic_upload_welcome_header": "Welcome to Airbnb, %{guest_first_name}!",
                    "shared.Welcome_to_Airbnb": "Welcome to Airbnb!",
                    "profile_pic_upsell.glad_youre_here": "We're glad you're here.",
                    "profile_pic_upsell.start_by_completing_profile": "Now, start by completing your profile and telling the Airbnb community more about yourself.",
                    "profile_pic_upsell.help_community_get_to_know_you": "Help the Airbnb community get to know you by completing your profile.",
                    "profile_pic_upsell.easier_to_book": "It's easier to book a place when hosts know who you are.",
                    "profile_pic_upsell.recommend_complete_profile": "We recommend completing your profile before booking your first stay.",
                    "profile_pic_upsell.complete_your_profile": "Complete Your Profile",
                    "profile_pic_upsell.maybe_later": "Maybe Later",
                    "Message Sent!": "Message Sent!",
                    "profile_pic_upsell.Looking_Good_name": "Looking Good, %{guest_first_name}!",
                    "profile_pic_upsell.Looking_Good": "Looking Good!",
                    "profile_pic_upsell.recommend_booking_before_first_stay": "We recommend completing your profile before booking your first stay.",
                    "welcome.tell_us_about_yourself": "Tell Us About Yourself"
                }), t.prototype.initialize.apply(this, e)
            },
            getRenderData: function() {
                return this.welcomeTemplateData()
            }
        });
    i("profile_pic_upsell/welcome_modal", l)
}($, require, provide),
function() {
    this.JST || (this.JST = {}), this.JST["profile_pic_uploader/confirmation_modal"] = function() {
        return this.JST || (this.JST = {}), this.JST["profile_pic_uploader/confirmation_modal"] = Handlebars.template(function(e, o, i, t, l) {
            this.compilerInfo = [4, ">= 1.0.0"], i = this.merge(i, e.helpers), t = this.merge(t, e.partials), l = l || {};
            var a = "",
                n, r = this;
            return a += '\n<div class="modal" role="dialog">\n  <div class="modal-table">\n    <div class="modal-cell">\n      <div class="modal-content">\n        <div class="panel-body text-center">\n          ', n = r.invokePartial(t["profile_pic_uploader/templates/confirmation_modal_body"], "profile_pic_uploader/templates/confirmation_modal_body", o, i, t, l), (n || 0 === n) && (a += n), a += "\n        </div>\n      </div>\n    </div>\n  </div>\n</div>\n"
        }), this.JST["profile_pic_uploader/confirmation_modal"]
    }.call(this)
}.call(this),
    function() {
        this.JST || (this.JST = {}), this.JST["profile_pic_uploader/confirmation_modal_body"] = function() {
            return this.JST || (this.JST = {}), this.JST["profile_pic_uploader/confirmation_modal_body"] = Handlebars.template(function(e, o, i, t, l) {
                this.compilerInfo = [4, ">= 1.0.0"], i = this.merge(i, e.helpers), l = l || {};
                var a = "",
                    n, r, s = i.helperMissing,
                    c = this.escapeExpression;
                return a += '<div class="panel-body text-center">\n  <div class="row">\n    \n    <div class="confirmation-interface">\n      <div class="col-10 col-center">\n        \n        <h3>\n          <strong>' + c((n = i.t || o && o.t, r = {
                    hash: {},
                    data: l
                }, n ? n.call(o, "profile_pic_uploader.is_this_you", r) : s.call(o, "t", "profile_pic_uploader.is_this_you", r))) + "</strong>\n        </h3>\n          <div>" + c((n = i.t || o && o.t, r = {
                    hash: {},
                    data: l
                }, n ? n.call(o, "profile_pic_uploader.make sure your face is visible", r) : s.call(o, "t", "profile_pic_uploader.make sure your face is visible", r))) + '</div>\n        \n        <div class="alert alert-error hide">\n          <i class="icon icon-alert alert-icon"></i>\n          ' + c((n = i.t || o && o.t, r = {
                    hash: {},
                    data: l
                }, n ? n.call(o, "profile_pic_uploader.error", r) : s.call(o, "t", "profile_pic_uploader.error", r))) + '\n        </div>\n      </div>\n      <div class="col-8 col-center">\n        <div class="profile_pic_container picture-main row-space-4 row-space-top-4">\n          <div class="media-photo profile-pic-background">\n            <img class="guest-picture">\n          </div>\n          <div class="guest-picture-container media-photo media-round">\n            <img class="guest-picture">\n          </div>\n        </div>\n\n        \n        <div class="row-space-2">\n          <button class="btn btn-block btn-primary confirmation btn-large text-wrap">\n            ' + c((n = i.t || o && o.t, r = {
                    hash: {},
                    data: l
                }, n ? n.call(o, "shared.save", r) : s.call(o, "t", "shared.save", r))) + '\n          </button>\n          <button class="btn btn-block btn-large retake text-wrap">\n            ' + c((n = i.t || o && o.t, r = {
                    hash: {},
                    data: l
                }, n ? n.call(o, "profile_pic_uploader.choose_other", r) : s.call(o, "t", "profile_pic_uploader.choose_other", r))) + '\n          </button>\n        </div>\n      </div>\n    </div>\n\n    \n    <div class="webcam-interface hide">\n      \n      <div class="panel-header text-center">\n        ' + c((n = i.t || o && o.t, r = {
                    hash: {},
                    data: l
                }, n ? n.call(o, "profile_pic_uploader.smile", r) : s.call(o, "t", "profile_pic_uploader.smile", r))) + "<br>\n        <small>" + c((n = i.t || o && o.t, r = {
                    hash: {},
                    data: l
                }, n ? n.call(o, "profile_pic_uploader.make sure your face is visible", r) : s.call(o, "t", "profile_pic_uploader.make sure your face is visible", r))) + '</small>\n      </div>\n\n      \n      <div class="panel-body" style="padding: 0px;">\n        <div id="webcam-container" class="row"></div>\n      </div>\n    </div>\n  </div>\n</div>\n'
            }), this.JST["profile_pic_uploader/confirmation_modal_body"]
        }.call(this)
    }.call(this),
    function() {
        this.JST || (this.JST = {}), this.JST["profile_pic_uploader/profile_pic_upsell_modal"] = function() {
            return this.JST || (this.JST = {}), this.JST["profile_pic_uploader/profile_pic_upsell_modal"] = Handlebars.template(function(e, o, i, t, l) {
                this.compilerInfo = [4, ">= 1.0.0"], i = this.merge(i, e.helpers), t = this.merge(t, e.partials), l = l || {};
                var a = "",
                    n, r = this;
                return a += '<div class="modal profile-pic-upsell-modal" role="dialog" aria-hidden="true">\n  <div class="modal-table">\n    <div class="modal-cell">\n      <div class="modal-content profile-pic-upsell">\n        ', n = r.invokePartial(t["profile_pic_uploader/profile_pic_upsell_modal_body"], "profile_pic_uploader/profile_pic_upsell_modal_body", o, i, t, l), (n || 0 === n) && (a += n), a += "\n      </div>\n    </div>\n  </div>\n</div>\n"
            }), this.JST["profile_pic_uploader/profile_pic_upsell_modal"]
        }.call(this)
    }.call(this),
    function() {
        this.JST || (this.JST = {}), this.JST["profile_pic_uploader/profile_pic_upsell_modal_body"] = function() {
            return this.JST || (this.JST = {}), this.JST["profile_pic_uploader/profile_pic_upsell_modal_body"] = Handlebars.template(function(e, o, i, t, l) {
                function a(e, o) {
                    var t = "",
                        l, a;
                    return t += '\n  <div class="panel-header panel-header-message-sent text-center">\n    <strong>' + u((l = i.t || e && e.t, a = {
                        hash: {},
                        data: o
                    }, l ? l.call(e, "Message Sent!", a) : h.call(e, "t", "Message Sent!", a))) + "</strong>\n  </div>\n"
                }

                function n(e, o) {
                    var t = "",
                        l, a, n;
                    return t += '\n          <div class="row-space-2">\n            <a class="upload-with-weibo btn btn-large btn-block btn-weibo"\n                href="/oauth_connect?service=weibo&from=', (a = i.flow) ? l = a.call(e, {
                        hash: {},
                        data: o
                    }) : (a = e && e.flow, l = typeof a === f ? a.call(e, {
                        hash: {},
                        data: o
                    }) : a), t += u(l) + '">\n              <i class="icon icon-weibo"></i>\n              <span>' + u((a = i.t || e && e.t, n = {
                        hash: {},
                        data: o
                    }, a ? a.call(e, "profile_pic_upsell.connect_weibo", n) : h.call(e, "t", "profile_pic_upsell.connect_weibo", n))) + "</span>\n            </a>\n          </div>\n        "
                }

                function r(e, o) {
                    var t = "",
                        l, a;
                    return t += '\n          <div class="row-space-2">\n            <button class="upload-with-facebook btn btn-large btn-block btn-facebook"\n                    data-ajax_populate="true">\n              <i class="icon icon-facebook"></i>\n              <span>' + u((l = i.t || e && e.t, a = {
                        hash: {},
                        data: o
                    }, l ? l.call(e, "profile_pic_upsell.connect_facebook", a) : h.call(e, "t", "profile_pic_upsell.connect_facebook", a))) + "</span>\n            </button>\n          </div>\n        "
                }

                function s(e, o) {
                    var t = "",
                        l, a, n;
                    return t += '\n          <div class="row-space-2">\n            <a class="upload-with-google btn btn-large btn-block btn-google"\n               href="/oauth_connect?service=google&from=', (a = i.flow) ? l = a.call(e, {
                        hash: {},
                        data: o
                    }) : (a = e && e.flow, l = typeof a === f ? a.call(e, {
                        hash: {},
                        data: o
                    }) : a), t += u(l) + '">\n                  <i class="icon icon-google-plus"></i>\n                  <span>' + u((a = i.t || e && e.t, n = {
                        hash: {},
                        data: o
                    }, a ? a.call(e, "profile_pic_upsell.connect_google", n) : h.call(e, "t", "profile_pic_upsell.connect_google", n))) + "</span>+\n            </a>\n          </div>\n        "
                }
                this.compilerInfo = [4, ">= 1.0.0"], i = this.merge(i, e.helpers), l = l || {};
                var c = "",
                    p, d, _, h = i.helperMissing,
                    u = this.escapeExpression,
                    f = "function",
                    m = this;
                return p = i["if"].call(o, o && o.isContactHostFlow, {
                    hash: {},
                    inverse: m.noop,
                    fn: m.program(1, a, l),
                    data: l
                }), (p || 0 === p) && (c += p), c += '\n<div class="error-alert">\n  <div class="panel-header alert-header text-center">\n    ' + u((d = i.t || o && o.t, _ = {
                    hash: {},
                    data: l
                }, d ? d.call(o, "profile_pic_upsell.upload_error_alert", _) : h.call(o, "t", "profile_pic_upsell.upload_error_alert", _))) + '\n  </div>\n</div>\n<div class="panel-body text-center">\n  <div class="row">\n    <div class="col-10 col-center">\n      <h3>\n        <strong>' + u((d = i.t || o && o.t, _ = {
                    hash: {},
                    data: l
                }, d ? d.call(o, "profile_pic_upsell.add_photo_header", _) : h.call(o, "t", "profile_pic_upsell.add_photo_header", _))) + "</strong>\n      </h3>\n      <div> " + u((d = i.t || o && o.t, _ = {
                    hash: {},
                    data: l
                }, d ? d.call(o, "profile_pic_upsell.add_photo_subheader", _) : h.call(o, "t", "profile_pic_upsell.add_photo_subheader", _))) + '</div>\n    </div>\n    <div class="col-8 col-center">\n      <div class="media-photo media-round row-space-6 row-space-top-6">\n        <img class="modal-user-profile-pic"\n             src="https://a0.muscache.com/defaults/user_pic-225x225.png" />\n        <div class="inner-dashed-circle media-round"></div>\n      </div>\n\n      <div class="upload-container">\n        ', p = i["if"].call(o, o && o.showWeiboButton, {
                    hash: {},
                    inverse: m.noop,
                    fn: m.program(3, n, l),
                    data: l
                }), (p || 0 === p) && (c += p), c += "\n\n        ", p = i["if"].call(o, o && o.showFacebookButton, {
                    hash: {},
                    inverse: m.noop,
                    fn: m.program(5, r, l),
                    data: l
                }), (p || 0 === p) && (c += p), c += "\n\n        ", p = i["if"].call(o, o && o.showGoogleButton, {
                    hash: {},
                    inverse: m.noop,
                    fn: m.program(7, s, l),
                    data: l
                }), (p || 0 === p) && (c += p), c += '\n\n        <div class="row-space-2 upload-photo">\n          \n          <iframe id="upload_form_frame"\n                  name="upload_form_frame"\n                  src="/users/ajax_photo_widget_form_iframe"\n                  frameborder="0"\n                  class="hide">\n          </iframe>\n\n          <button class="upload-photo-button btn btn-large btn-block text-wrap">\n            <span>' + u((d = i.t || o && o.t, _ = {
                    hash: {},
                    data: l
                }, d ? d.call(o, "profile_pic_upsell.upload_a_photo", _) : h.call(o, "t", "profile_pic_upsell.upload_a_photo", _))) + '</span>\n          </button>\n        </div>\n\n        <a class="decline-add-photo">\n          <strong>' + u((d = i.t || o && o.t, _ = {
                    hash: {},
                    data: l
                }, d ? d.call(o, "profile_pic_upsell.decline_add_photo", _) : h.call(o, "t", "profile_pic_upsell.decline_add_photo", _))) + "</strong>\n        </a>\n      </div>\n    </div>\n  </div>\n</div>\n"
            }), this.JST["profile_pic_uploader/profile_pic_upsell_modal_body"]
        }.call(this)
    }.call(this),
    function() {
        this.JST || (this.JST = {}), this.JST["profile_pic_uploader/upsell_welcome_body"] = function() {
            return this.JST || (this.JST = {}), this.JST["profile_pic_uploader/upsell_welcome_body"] = Handlebars.template(function(e, o, i, t, l) {
                function a(e, o) {
                    var t = "",
                        l, a;
                    return t += "\n          ", (a = i.header_text) ? l = a.call(e, {
                        hash: {},
                        data: o
                    }) : (a = e && e.header_text, l = typeof a === d ? a.call(e, {
                        hash: {},
                        data: o
                    }) : a), t += _(l) + "\n        "
                }

                function n(e, o) {
                    var t = "",
                        l, a;
                    return t += "\n          ", (a = i.no_first_name_header_text) ? l = a.call(e, {
                        hash: {},
                        data: o
                    }) : (a = e && e.no_first_name_header_text, l = typeof a === d ? a.call(e, {
                        hash: {},
                        data: o
                    }) : a), t += _(l) + "\n        "
                }
                this.compilerInfo = [4, ">= 1.0.0"], i = this.merge(i, e.helpers), l = l || {};
                var r = "",
                    s, c, p, d = "function",
                    _ = this.escapeExpression,
                    h = this,
                    u = i.helperMissing;
                return r += '<div class="panel-body text-center">\n  <div class="row">\n    <h3>\n      <strong>\n        ', s = i["if"].call(o, o && o.hasStoredFirstName, {
                    hash: {},
                    inverse: h.program(3, n, l),
                    fn: h.program(1, a, l),
                    data: l
                }), (s || 0 === s) && (r += s), r += '\n      </strong>\n    </h3>\n    <div class="media-photo media-round row-space-6 row-space-top-6">\n      <img class="modal-user-profile-pic" src="', (c = i.modal_userpic_url) ? s = c.call(o, {
                    hash: {},
                    data: l
                }) : (c = o && o.modal_userpic_url, s = typeof c === d ? c.call(o, {
                    hash: {},
                    data: l
                }) : c), r += _(s) + '" />\n    </div>\n\n    <div class="col-8 col-center">\n      <div class="row-space-4">\n        ', (c = i.text_below) ? s = c.call(o, {
                    hash: {},
                    data: l
                }) : (c = o && o.text_below, s = typeof c === d ? c.call(o, {
                    hash: {},
                    data: l
                }) : c), r += _(s) + '\n      </div>\n\n      <div class="row-space-2">\n        <a class="complete-profile btn btn-large btn-block btn-primary text-wrap"\n            href="/users/edit">\n          ' + _((c = i.t || o && o.t, p = {
                    hash: {},
                    data: l
                }, c ? c.call(o, "profile_pic_upsell.complete_your_profile", p) : u.call(o, "t", "profile_pic_upsell.complete_your_profile", p))) + '\n        </a>\n      </div>\n\n      <a class="continue-browsing btn btn-large btn-block text-wrap" href="#">\n        <strong>' + _((c = i.t || o && o.t, p = {
                    hash: {},
                    data: l
                }, c ? c.call(o, "profile_pic_upsell.maybe_later", p) : u.call(o, "t", "profile_pic_upsell.maybe_later", p))) + "</strong>\n      </a>\n    </div>\n  </div>\n</div>\n"
            }), this.JST["profile_pic_uploader/upsell_welcome_body"]
        }.call(this)
    }.call(this),
    function() {
        this.JST || (this.JST = {}), this.JST["profile_pic_uploader/upsell_welcome_modal"] = function() {
            return this.JST || (this.JST = {}), this.JST["profile_pic_uploader/upsell_welcome_modal"] = Handlebars.template(function(e, o, i, t, l) {
                this.compilerInfo = [4, ">= 1.0.0"], i = this.merge(i, e.helpers), t = this.merge(t, e.partials), l = l || {};
                var a = "",
                    n, r = this;
                return a += '<div class="modal profile-pic-upsell-modal" role="dialog" aria-hidden="true">\n  <div class="modal-table">\n    <div class="modal-cell">\n      <div class="modal-content profile-pic-upsell">\n        ', n = r.invokePartial(t["profile_pic_uploader/upsell_welcome_body"], "profile_pic_uploader/upsell_welcome_body", o, i, t, l), (n || 0 === n) && (a += n), a += "\n      </div>\n    </div>\n  </div>\n</div>\n"
            }), this.JST["profile_pic_uploader/upsell_welcome_modal"]
        }.call(this)
    }.call(this);;