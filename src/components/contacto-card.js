import {PolymerElement, html} from '@polymer/polymer/polymer-element.js';
import * as moment from 'moment';
import 'moment/locale/es';

/**
 * `contacto-card` Description
 *
 * @customElement
 * @polymer
 * @demo
 * 
 */
class ContactoCard extends PolymerElement {
  static get properties() {
    return {
      nombre: String,
      email: String,
      fecha: Number,
      fechaLegible: {
        type: String,
        computed: 'getFechaLegible(fecha)'
      }
    }
  }

  static get template() {
    return html`      
      <style>
        .card {
          display: inline-block;
          border-radius: 50%;
          background-color: #efe;
          box-shadow: 2px 2px 12px #9cf;
          padding: 30px;
          margin: 5px;
        }
        p, h3 {
          margin-top: 0;
        }
      </style>
      <div class="card">
            <h3>[[nombre]]</h3>
            <p>[[email]]</p>
            <p>[[fechaLegible]]</p>
      </div>
    `;
  }

  getFechaLegible(timestamp) {
    // let fecha = new Date(timestamp);
    // return fecha.getDay() + ' ' + fecha.getMonth() + ' ' + fecha.getFullYear();
    let fecha = moment(timestamp);
    moment.locale('es-ES');
    //return fecha.format("dddd, MMMM Do YYYY, h:mm:ss a");
    return fecha.fromNow();
  }

}

customElements.define('contacto-card', ContactoCard);