'use strict'
import { API, config } from './Variables.js';

var gridData = {
    currentPage: 0,
    LastPage: 0,
    From: 0,
    To: 0,
    Total: 0
}
var Inmuebles;

document.addEventListener('DOMContentLoaded', () => {
    function loadGrid() {

    }
    function getGrid() {
        axios.get(API.Api_Url + API.ProGrid_Ep, config)
            .then(response => {
                console.log(response.data);
                Inmuebles = response.data.data;
                gridData.currentPage = response.data.current_page;
                gridData.LastPage = response.data.last_page;
                gridData.From = response.data.from;
                gridData.To = response.data.to;
                gridData.Total = response.data.total;
            })
            .catch(error => {
                console.log(error);
            })
    }
})