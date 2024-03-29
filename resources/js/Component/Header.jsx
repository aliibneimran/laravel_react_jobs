import { Link } from '@inertiajs/inertia-react'
import React from 'react'

export default function Header() {
  return (
    <div>
        {/* <div id="preloader-active">
    <div className="preloader d-flex align-items-center justify-content-center">
      <div className="preloader-inner position-relative">
        <div className="text-center"><img src="frontend/imgs/template/loading.gif" alt="jobBox" /></div>
      </div>
    </div><
  </div> */}
  <div className="modal fade" id="ModalApplyJobForm" tabIndex={-1} aria-hidden="true">
    <div className="modal-dialog modal-lg">
      <div className="modal-content apply-job-form">
        <button className="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" />
        <div className="modal-body pl-30 pr-30 pt-50">
          <div className="text-center">
            <p className="font-sm text-brand-2">Job Application </p>
            <h2 className="mt-10 mb-5 text-brand-1 text-capitalize">Start your career today</h2>
            <p className="font-sm text-muted mb-30">Please fill in your information and send it to the employer.                 </p>
          </div>
          <form className="login-register text-start mt-20 pb-30" action="#">
            <div className="form-group">
              <label className="form-label" htmlFor="input-1">Full Name *</label>
              <input className="form-control" id="input-1" type="text" required name="fullname" placeholder="Steven Job" />
            </div>
            <div className="form-group">
              <label className="form-label" htmlFor="input-2">Email *</label>
              <input className="form-control" id="input-2" type="email" required name="emailaddress" placeholder="stevenjob@gmail.com" />
            </div>
            <div className="form-group">
              <label className="form-label" htmlFor="number">Contact Number *</label>
              <input className="form-control" id="number" type="text" required name="phone" placeholder="(+01) 234 567 89" />
            </div>
            <div className="form-group">
              <label className="form-label" htmlFor="des">Description</label>
              <input className="form-control" id="des" type="text" required name="Description" placeholder="Your description..." />
            </div>
            <div className="form-group">
              <label className="form-label" htmlFor="file">Upload Resume</label>
              <input className="form-control" id="file" name="resume" type="file" />
            </div>
            <div className="login_footer form-group d-flex justify-content-between">
              <label className="cb-container">
                <input type="checkbox" /><span className="text-small">Agree our terms and policy</span><span className="checkmark" />
              </label><Link className="text-muted" href="page-contact.html">Lean more</Link>
            </div>
            <div className="form-group">
              <button className="btn btn-default hover-up w-100" type="submit" name="login">Apply Job</button>
            </div>
            <div className="text-muted text-center">Do you need support? <Link href="page-contact.html">Contact Us</Link></div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <header className="header fixed-top bg-light p-10">
    <div className="container">
      <div className="main-header">
        <div className="header-left">
          <div className="header-logo"><Link className="d-flex" href="/"><img alt="jobBox" src="frontend/imgs/template/jobhub-logo.svg" /></Link></div>
        </div>
        <div className="header-nav">
          <nav className="nav-main-menu">
           <ul className="main-menu">
              <li ><Link className="active" href="/">Home</Link></li>
              <li ><Link href="jobs">Job</Link></li>
              <li ><Link href="companies">Recruiters</Link></li>
              <li ><Link href="candidates">Candidates</Link></li>
              <li ><Link href="about">About Us</Link></li>
              <li ><Link href="contact">Contact Us</Link></li>
              <li className="dashboard"><Link href="profile" target="_blank">Dashboard</Link></li>
            </ul>
          </nav>
          <div className="burger-icon burger-icon-white"><span className="burger-icon-top" /><span className="burger-icon-mid" /><span className="burger-icon-bottom" /></div>
        </div>
        <div className="header-right">
          <div className="block-signin"><Link className="text-link-bd-btom hover-up" href="signup">Register</Link><Link className="btn btn-default btn-shadow ml-40 hover-up" href="signin">Sign in</Link></div>
        </div>
      </div>
    </div>
  </header>
  <div className="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
    <div className="mobile-header-wrapper-inner">
      <div className="mobile-header-content-area">
        <div className="perfect-scroll">
          <div className="mobile-search mobile-header-border mb-30">
            <form action="#">
              <input type="text" placeholder="Search…" /><i className="fi-rr-search" />
            </form>
          </div>
          <div className="mobile-menu-wrap mobile-header-border">
            {/* mobile menu start*/}
            <nav>
              <ul className="mobile-menu font-heading">
                <li ><Link className="active" href="/">Home</Link></li>
                <li ><Link href="job">Job</Link></li>
                <li ><Link href="companies">Recruiters</Link></li>
                <li ><Link href="candidates">Candidates</Link></li>
                <li ><Link href="blogs">Blog</Link></li>
                <li><Link href="">Dashboard</Link></li>
              </ul>
            </nav>
          </div>
          <div className="mobile-account">
            <h6 className="mb-10">Your Account</h6>
            <ul className="mobile-menu font-heading">
              <li><Link href="#">Profile</Link></li>
              <li><Link href="#">Work Preferences</Link></li>
              <li><Link href="#">Account Settings</Link></li>
              <li><Link href="#">Go Pro</Link></li>
              <li><Link href="page-signin.html">Sign Out</Link></li>
            </ul>
          </div>
          <div className="site-copyright">Copyright 2022 © JobBox. <br />Designed by AliThemes.</div>
        </div>
      </div>
    </div>
  </div>
 
  </div>
  )
}
