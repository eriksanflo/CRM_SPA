using System;
using System.Collections.Generic;

namespace CRM_SPA.Main.Entities
{
    public partial class ItemServicio
    {
        public int IdItem { get; set; }
        public string ImagenUrl { get; set; }

        public virtual Item IdItemNavigation { get; set; }
    }
}
