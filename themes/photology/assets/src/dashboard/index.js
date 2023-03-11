import React from 'react';
import ReactDOM from 'react-dom';
import domReady from '@wordpress/dom-ready';
import DashboardPage from './dashboard-page';
import './dashboard.scss';

if ( document.getElementById('gutenverse-theme-dashboard') ) {
    domReady(() => {
        ReactDOM.render(
            <DashboardPage/>,
            document.getElementById('gutenverse-theme-dashboard')
        );
    });
}