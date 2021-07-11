'use strict'
import { API, config } from './Variables.js';
var Base_url = "http://localhost/HoyosLuqueWEB";
var gridData = {
    currentPage: 0,
    LastPage: 0,
    From: 0,
    To: 0,
    Total: 0
}
var Inmuebles;

document.addEventListener('DOMContentLoaded', () => {
    function postDestacado(inmueble) {

    }
    function getGrid(pagina) {
        config.headers = {
            ...config.headers,
            perpage: 3,
        };
        config.params = {
            page: pagina,
            great: "on"
        }
        axios.get(API.Api_Url + API.ProGrid_Ep, config)
            .then(response => {
                Inmuebles = response.data.data;
                gridData.currentPage = response.data.current_page;
                gridData.LastPage = response.data.last_page;
                gridData.From = response.data.from;
                gridData.To = response.data.to;
                gridData.Total = response.data.total;
                Inmuebles.forEach(element => {
                    postDestacado(element);
                });
                if (gridData.currentPage < gridData.LastPage) {
                    return getGrid(gridData.currentPage + 1);
                }
                else {
                    return null;
                }
            })
            .catch(error => {
                console.log(error);
            })
    }
    getGrid(1);
})