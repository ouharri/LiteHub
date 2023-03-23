/*!
 * PSPDFKit for Web 2023.1.4 (https://pspdfkit.com/web)
 *
 * Copyright (c) 2016-2023 PSPDFKit GmbH. All rights reserved.
 *
 * THIS SOURCE CODE AND ANY ACCOMPANYING DOCUMENTATION ARE PROTECTED BY INTERNATIONAL COPYRIGHT LAW
 * AND MAY NOT BE RESOLD OR REDISTRIBUTED. USAGE IS BOUND TO THE PSPDFKIT LICENSE AGREEMENT.
 * UNAUTHORIZED REPRODUCTION OR DISTRIBUTION IS SUBJECT TO CIVIL AND CRIMINAL PENALTIES.
 * This notice may not be removed from this file.
 *
 * PSPDFKit uses several open source third-party components: https://pspdfkit.com/acknowledgements/web/
 */
(globalThis.webpackChunkPSPDFKit=globalThis.webpackChunkPSPDFKit||[]).push([[1843],{61448:()=>{Intl.PluralRules&&"function"==typeof Intl.PluralRules.__addLocaleData&&Intl.PluralRules.__addLocaleData({data:{uk:{categories:{cardinal:["one","few","many","other"],ordinal:["few","other"]},fn:function(a,e){var l=String(a).split("."),t=l[0],n=!l[1],i=Number(l[0])==a,o=i&&l[0].slice(-1),r=i&&l[0].slice(-2),u=t.slice(-1),c=t.slice(-2);return e?3==o&&13!=r?"few":"other":n&&1==u&&11!=c?"one":n&&u>=2&&u<=4&&(c<12||c>14)?"few":n&&0==u||n&&u>=5&&u<=9||n&&c>=11&&c<=14?"many":"other"}}},availableLocales:["uk"]})}}]);