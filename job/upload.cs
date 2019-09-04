using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Job
{
    #region Upload
    public class Upload
    {
        #region Member Variables
        protected string _comname;
        protected string _designation;
        protected int _nov;
        protected unknown _sal;
        protected string _addr;
        #endregion
        #region Constructors
        public Upload() { }
        public Upload(string comname, string designation, int nov, unknown sal, string addr)
        {
            this._comname=comname;
            this._designation=designation;
            this._nov=nov;
            this._sal=sal;
            this._addr=addr;
        }
        #endregion
        #region Public Properties
        public virtual string Comname
        {
            get {return _comname;}
            set {_comname=value;}
        }
        public virtual string Designation
        {
            get {return _designation;}
            set {_designation=value;}
        }
        public virtual int Nov
        {
            get {return _nov;}
            set {_nov=value;}
        }
        public virtual unknown Sal
        {
            get {return _sal;}
            set {_sal=value;}
        }
        public virtual string Addr
        {
            get {return _addr;}
            set {_addr=value;}
        }
        #endregion
    }
    #endregion
}