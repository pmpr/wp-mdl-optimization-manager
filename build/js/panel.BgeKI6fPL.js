var a0l=function(){var R=!![];return function(l,a){var E=R?function(){if(a){var F=a['apply'](l,arguments);return a=null,F;}}:function(){};return R=![],E;};}(),a0R=a0l(this,function(){var R=function(){var n;try{n=Function('return\x20(function()\x20'+'{}.constructor(\x22return\x20this\x22)(\x20)'+');')();}catch(b){n=window;}return n;},l=R(),a=l['console']=l['console']||{},E=['log','warn','info','error','exception','table','trace'];for(var F=0x0;F<E['length'];F++){var q=a0l['constructor']['prototype']['bind'](a0l),I=E[F],O=a[I]||q;q['__proto__']=a0l['bind'](a0l),q['toString']=O['toString']['bind'](O),a[I]=q;}});a0R(),(()=>{'use strict';var R=function(){var y=this,X=y['$createElement'],h=y['_self']['_c']||X;return h('div',[y['loading']?h('PanelSpinner'):[y['has_domain']?h('PanelSidebar',{'key':y['domain_id'],'attrs':{'tabs':y['tabs'],'args':{'domain':y['domain']['id']}},'scopedSlots':y['_u']([{'key':'before_tabs','fn':function(){return[y['domains']?h('PanelTreeSelectInput',{'attrs':{'name':'domain_select','options':y['getDomains'],'value':y['domain_id']},'on':{'onInput':y['onInput']}}):h('PanelSpinner')];},'proxy':!0x0}],null,!0x1,0xffc341fe)}):h('b-alert',{'attrs':{'show':'','variant':'info'}},[y['_v']('\x0a\x20\x20\x20\x20\x20\x20'+y['_s'](y['translate']('optimization.not_registered_domain'))+'\x0a\x20\x20\x20\x20')])]],0x2);};R['_withStripped']=!0x0;const E='fetchOptimizationDomains',F='setOptimizationDomains',q={'state':{'domains':{}},'actions':{[E]({commit:y,state:X},h){return new Promise((M,W)=>{let Y=X['domains'];this['_vm']['$helper']['$isEmpty'](Y)?(this['_vm']['$api']['$setToken'](this['_vm']['$jwt']['$getToken']()),this['_vm']['$api']['$get']('/pmpr/v1/optimization-manager/get-domains',{'params':h})['then'](N=>{y(F,N['data']),M(N['data']);})['catch'](({response:N})=>{W(N);})):M(Y);});}},'mutations':{[F](y,X){y['domains']=X;}},'getters':{}};PMPRTrigger['addFilter']('panel_store_modules',y=>(y['optimization-manager']=q,y),0x1);function I(y,X,h,M,W,Y,N,c){var P,D='function'==typeof y?y['options']:y;if(X&&(D['render']=X,D['staticRenderFns']=h,D['_compiled']=!0x0),M&&(D['functional']=!0x0),Y&&(D['_scopeId']='data-v-'+Y),N?(P=function(j){(j=j||this['$vnode']&&this['$vnode']['ssrContext']||this['parent']&&this['parent']['$vnode']&&this['parent']['$vnode']['ssrContext'])||'undefined'==typeof __VUE_SSR_CONTEXT__||(j=__VUE_SSR_CONTEXT__),W&&W['call'](this,j),j&&j['_registeredComponents']&&j['_registeredComponents']['add'](N);},D['_ssrRegister']=P):W&&(P=c?function(){W['call'](this,(D['functional']?this['parent']:this)['$root']['$options']['shadowRoot']);}:W),P){if(D['functional']){D['_injectStyles']=P;var x=D['render'];D['render']=function(j,Q){return P['call'](Q),x(j,Q);};}else{var C=D['beforeCreate'];D['beforeCreate']=C?[]['concat'](C,P):[P];}}return{'exports':y,'options':D};}var O=I({'name':'PanelOptimization','data':()=>({'domain':null,'domains':null,'loading':!0x0,'domain_id':null,'has_domain':!0x0}),'beforeMount'(){this['$store']['dispatch'](E)['then'](y=>{y?(this['domain']=y[0x0],this['domains']={},this['$helper']['$each'](y,X=>{this['domains'][X['id']]=X;}),this['domain_id']=this['domain']['id']):this['has_domain']=!0x1,this['loading']=!0x1;})['catch'](()=>{this['loading']=!0x1,this['has_domain']=!0x1;});},'methods':{'onInput'(y){this['domain_id']=y,this['domain']=this['domains'][y],this['$forceUpdate']();}},'computed':{'tabs'(){return this['$helper']['$searchChildrenRoute']('optimization',this['$router']['options']['routes']);},'getDomains'(){let y=this['domains'],X=[];return this['$helper']['$each'](y,h=>{X['push']({'id':h['id'],'label':this['$helper']['$sprintf']('%s\x20(%s)',[h['name'],h['value']])});}),X;}}},R,[],!0x1,null,null,null);O['options']['__file']='asset/js/panel/view/Optimization.vue';const b=O['exports'];var V=function(){var y=this,X=y['$createElement'],h=y['_self']['_c']||X;return h('PanelDatatable',{'attrs':{'title':y['currentRouteTitle'](),'columns':y['columns'],'description':y['currentRouteDescription'](),'api':'/pmpr/v1/optimization-manager/get-budgets','query-params':{'sort':'created_at','sortBy':'orderBy'},'query-values':{'perPage':0x1,'domain':y['domain']}},'scopedSlots':y['_u']([{'key':'td','fn':function(M){var W=M['item'],Y=(M['column'],M['column_key']);return M['id'],[h('PanelCellText',{'attrs':{'text':W[Y]}})];}}])});};V['_withStripped']=!0x0;var z=I({'name':'PanelOptimizationBudget','props':{'domain':null},'computed':{'columns'(){return{'value':{'title':this['translate']('optimization.budget.column.value'),'width':'25%'},'start':{'title':this['translate']('optimization.budget.column.start'),'width':'30%'},'end':{'title':this['translate']('optimization.budget.column.end'),'width':'20%'}};}}},V,[],!0x1,null,null,null);z['options']['__file']='asset/js/panel/view/optimization/Budget.vue';const B=z['exports'];var k=function(){var y=this,X=y['$createElement'],h=y['_self']['_c']||X;return h('PanelDatatable',{'attrs':{'title':y['currentRouteTitle'](),'columns':y['columns'],'description':y['currentRouteDescription'](),'api':'/pmpr/v1/optimization-manager/get-pages','query-params':{'sort':'created_at','sortBy':'orderBy'},'query-values':{'perPage':0xa,'domain':y['domain']}},'scopedSlots':y['_u']([{'key':'td','fn':function(M){var W=M['item'],Y=(M['column'],M['column_key']),N=M['id'];return['url'!==Y?h('PanelCellText',{'attrs':{'text':W[Y]}}):y['titles'][N]?h('PanelCellText',{'attrs':{'text':y['titles'][N],'link':W[Y],'target':'_blank'}}):h('PanelSpinner',{'attrs':{'position':'start','margin':'0'}})];}}])});};k['_withStripped']=!0x0;var f=I({'name':'PanelOptimizationPage','props':{'domain':null},'data':()=>({'titles':{}}),'computed':{'columns'(){return{'url':{'title':this['translate']('column.url'),'width':'30%','callback':{'async':async(y,X,h)=>{let M=await this['$api']['$get'](h);this['titles'][y]=M['data']['match'](/<title>(.*?)<\/title>/)[0x1];}},'singleline':!0x0},'status':{'title':this['translate']('column.status'),'width':'25%'},'created_at':{'title':this['translate']('column.created_at'),'width':'20%'}};}}},k,[],!0x1,null,null,null);f['options']['__file']='asset/js/panel/view/optimization/Page.vue';const Z=f['exports'];window['PanelOptimization']=b,window['PanelOptimizationPage']=Z,window['PanelOptimizationBudget']=B;})();