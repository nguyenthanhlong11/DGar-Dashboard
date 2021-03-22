<script>
import {
  Line
} from "vue-chartjs";

export default {
  extends: Line,
  mounted() {
  axios.get('http://127.0.0.1:8000/api/countLocationByMonth').then(res=> {
  const location = res.data;

    this.renderChart({
      labels: [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December"
      ],
      datasets: [{
        label: "Total",
        data: location,
        backgroundColor: "transparent",
        borderColor: "rgba(1, 116, 188, 0.50)",
        pointBackgroundColor: "rgba(171, 71, 188, 1)"
      }, ]
    }, {
      responsive: true,
      maintainAspectRatio: false,
      title: {
        display: true,
        text: "THE NUMBER OF POPULATION PLACE HANDLED",
        fontSize: 50
      }
    });
  })
  }
};
</script>
