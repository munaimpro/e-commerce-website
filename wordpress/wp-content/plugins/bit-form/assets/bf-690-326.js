var O=Object.defineProperty,b=Object.defineProperties;var v=Object.getOwnPropertyDescriptors;var S=Object.getOwnPropertySymbols;var C=Object.prototype.hasOwnProperty,I=Object.prototype.propertyIsEnumerable;var w=(r,e,o)=>e in r?O(r,e,{enumerable:!0,configurable:!0,writable:!0,value:o}):r[e]=o,x=(r,e)=>{for(var o in e||(e={}))C.call(e,o)&&w(r,o,e[o]);if(S)for(var o of S(e))I.call(e,o)&&w(r,o,e[o]);return r},P=(r,e)=>b(r,v(e));import{v as K,h as M,q as R,j as $,I as j,g as T,bt as p,ao as z}from"./main-601.js";import{S as B}from"./bf-275-111.js";import{E as H}from"./bf-592-321.js";function J({type:r,title:e,tipTitle:o,isUnique:t,className:E}){var c,g,a,f,l,m;const{fieldKey:i}=K(),[d,k]=M(z),s=R(d[i]),A=F=>{if(!j)return;const{checked:h}=F.target;if(s.err||(s.err={}),s.err[r]||(s.err[r]={}),h){s.err[r].show=!0;const n="That field is taken. Try another";s.err[r].dflt||(s.err[r].dflt=n)}else delete s.err[r].show;const u=T(d,n=>{n[i]=s});k(u),p({event:`${e} ${h?"On":"Off"}`,type:e,state:{fields:u,fldKey:i}})};return $.jsx(B,P(x({id:`${r}-stng`,title:e,className:E,tip:o,toggleName:r,toggleAction:A,toggleChecked:(g=(c=s==null?void 0:s.err)==null?void 0:c[r])==null?void 0:g[t],switching:!0,tipProps:{width:200,icnSize:17},open:(f=(a=s==null?void 0:s.err)==null?void 0:a[r])==null?void 0:f[t]},j&&{disable:!((m=(l=s==null?void 0:s.err)==null?void 0:l[r])!=null&&m[t])}),{isPro:!0,proProperty:r,children:$.jsx(H,{id:`${r}-stng`,type:r,title:e,tipTitle:o})}))}export{J as U};