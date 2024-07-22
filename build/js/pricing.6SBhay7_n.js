/*! For license information please see pricing.6SBhay7_n.js.LICENSE.txt */
!function(){const e=PRHelper.getHook(),t=PRHelper.getHTML(),n=PRHelper.getType(),r=PRHelper.getTool(),s=PRHelper.getForm(),o=PRHelper.getServer(),i=PRHelper.getRequest(),c=PRHelper.getSetting(),a=t.getElement(".pr-multistep-wrap"),l=t.getAttribute(a,"id"),d=t.getElement(".pr-multistep-body > .pr-spinner",a),p=(window.PR_MULTISTEPS[l],o.getParams()),_="order_request_domain";let m,g,h;function u(e){switch(e){case"choice_order_type":t.setElementActivity(t.getElement("#step_content_choice_order_type .next-action"),!n.isEmpty(g),!1);break;case"choice_order":t.setElementActivity(t.getElement("#step_content_choice_order .next-action"),!n.isEmpty(m),!1);break;case"choice_domain":!function(){const e=t.getElement("#step_content_choice_domain a.login-link");if(t.isElement(e)){const t=o.addParams({order_request_domain:"prev_domains"});e.href=o.addParams({redirect_to:encodeURIComponent(t)},e.href)}}()}}p.hasOwnProperty(_)&&t.spinner(d,!0),e.on("load",(function(){p.hasOwnProperty(_)&&(s.setFieldValue(`#${_}`,p[_],!0),t.spinner(d,!1))})),e.on("change",(e=>{u("choice_domain")}),"#order_request_domain"),e.on("click",(()=>{let e=t.getTarget(event,".selectable"),n=t.getElement(".selected",t.getParent(e,".selectables"));if(t.isElement(n)&&t.removeClass(n,"selected"),t.addClass(e,"selected"),t.is(e,".extra")||t.is(e,".plan"))m=t.getData(e,"id"),u("choice_order");else{m=null,g=t.getData(e,"name");const n=t.getElement("#step_content_choice_order");switch(t.removeClass(t.getElement(".selected",n),"selected"),g){case"plan":t.hide(t.getElement(".extras",n)),t.show(t.getElement(".plans",n));break;case"extra":t.hide(t.getElement(".plans",n)),t.show(t.getElement(".extras",n))}u("choice_order_type")}}),".selectables .selectable"),e.addAction(`multistep_${l}_submitted`,(async(e,t)=>{t[g]=m,t.order_type=g,e.stop(),i.ajax(c.getOption("subscription.ajax.add_to_cart")).addNonce().onSuccess((e=>{window.location.href=e})).onError((t=>{e.showMessage(r.error2string(t)),e.resume()})).send(t)}),10,2),e.addFilter(`multistep_${l}_can_goto_next_step`,((e,t)=>{if(!0===e){let r=!1;switch(t.getCurrentStepName()){case"choice_order_type":n.isEmpty(g)&&(r="select_order_type");break;case"choice_order":n.isEmpty(m)&&(r=`select_${g}`)}r&&(e=c.getOption(`subscription.errors.${r}`,!1))}return e})),e.addAction(`multistep_${l}_step_changed`,(e=>{u(e.getCurrentStepName())})),e.addAction("multistep_initialized",(e=>{h=e}))}();