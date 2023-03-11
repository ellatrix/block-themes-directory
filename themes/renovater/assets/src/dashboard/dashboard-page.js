import React, { Fragment, useState, useEffect } from 'react';
import { isEmpty } from 'lodash';
import { DashCheck, DashClose, DashEye } from './dashboard-icons';

const DashboardPage = () => {
    const {
        install,
        installText,
        activateText,
        doneText,
        title,
        description,
        title2,
        title3,
        description3,
        note,
        note2,
        demo,
        demoUrl,
        pages,
        table,
        benefits
    } = window['GutenThemeConfig'];

    const [gutenverse, setGutenverse] = useState(null);
    const [loading, setLoading] = useState(true);
    const [popupImg, setPopupImg] = useState('');
    const [openPopup, setOpenPopup] = useState(false);

    useEffect(() => {
        wp.apiFetch({
            path: 'wp/v2/plugins/gutenverse/gutenverse',
            method: 'GET',
        }).then(data => {
            !isEmpty(data) && setGutenverse(data);
        }).catch(() => {
            setGutenverse(false);
        }).finally(() => {
            setLoading(false);
        });
    }, []);

    const activatePlugin =() => {
        setLoading(true);

        if (!isEmpty(gutenverse) && gutenverse['status'] === 'active') {
            window.open(install, '_self');
            return;
        }

        let path = 'wp/v2/plugins';
        let data = {
            slug: 'gutenverse',
            status: 'active'
        }

        if (!isEmpty(gutenverse) && gutenverse['status'] === 'inactive') {
            path = 'wp/v2/plugins/gutenverse/gutenverse';
            data = {
                status: 'active'
            };
        }
        
        wp.apiFetch({
            path,
            method: 'POST',
            data
        }).finally(() => {
            setLoading(false);
            location.reload();
        });
    }

    const onOpen = img => {
        setOpenPopup(true);
        setPopupImg(img);
    }

    const onClose = () => {
        setOpenPopup(false);
    }

    return <Fragment>
        <div className='top-container'>
            <div className='install-template'>
                <div className='thumbnail'>
                    {Object.keys(pages).map(key => {
                        return <div key={key} className='image' onClick={() => onOpen(pages[key])}>
                            <img src={pages[key]} alt='image' width='400' height='300'/>
                            <div className='hover'><DashEye/></div>
                        </div>
                    })}
                </div>
                <div className='content'>
                    <h2 className='title'>{title}</h2>
                    <span className='description'>{description}</span>
                    <span className='note'><strong>{note}</strong></span>
                    <span className='note'><strong>{note2}</strong></span>
                    <div className='gutenverse-bottom'>
                        {!isEmpty(gutenverse) && gutenverse['status'] === 'active' ? <span className='gutenverse-button active'>
                            {loading ? <div className="loader"></div> : doneText}
                        </span> : !isEmpty(gutenverse) && gutenverse['status'] === 'inactive' ? <span className='gutenverse-button' onClick={activatePlugin}>
                            {loading ? <div className="loader"></div> : activateText}
                        </span> : <span className='gutenverse-button' onClick={activatePlugin}>
                            {loading ? <div className="loader"></div> : installText}
                        </span>}
                        <a className='gutenverse-link' href={demoUrl} target='_blank'>{demo}</a>
                    </div>
                </div>
            </div>
        </div>
        <div className='bottom-container'>
            <div className='comparison'>
                <h2 className='title'>{title2}</h2>
                <table>
                    <thead>
                        <tr className='thead_tr'>
                            {table['titles'].map((title, key) => <th key={key} className='thead_th'>{title}</th>)}
                        </tr>
                    </thead>
                    <tbody>
                        {table['features'].map((feature, key) => {
                            return <tr key={key}>
                                <td className='tbody_td'>{feature}</td>
                                <td className='tbody_td center'><DashCheck/></td>
                                <td className='tbody_td center'><DashClose/></td>
                            </tr>
                        })}
                    </tbody>
                </table>
            </div>
            <div className='benefits'>
                <h2 className='title'>{title3}</h2>
                <span className='description'>{description3}</span>
                <div className='features'>
                    <span><strong>{benefits['title']}</strong></span>
                    <ul>
                        {benefits['features'].map((feature, key) => {
                            return <li key={key}>{feature}</li>
                        })}
                    </ul>
                </div>
            </div>
        </div>
        <div className={`popup ${!openPopup ? 'hide' : ''}`} onClick={onClose}>
            <img src={popupImg} alt='image'/>
        </div>
    </Fragment>
}

export default DashboardPage;