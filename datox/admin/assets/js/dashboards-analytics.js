/**
 * Dashboard Analytics
 */

'use strict';

(function () {
  let cardColor, headingColor, labelColor, shadeColor, grayColor;
  if (isDarkStyle) {
    cardColor = config.colors_dark.cardColor;
    labelColor = config.colors_dark.textMuted;
    headingColor = config.colors_dark.headingColor;
    shadeColor = 'dark';
    grayColor = '#5E6692'; // gray color is for stacked bar chart
  } else {
    cardColor = config.colors.cardColor;
    labelColor = config.colors.textMuted;
    headingColor = config.colors.headingColor;
    shadeColor = '';
    grayColor = '#817D8D';
  }

  // swiper loop and autoplay
  // --------------------------------------------------------------------
  const swiperWithPagination = document.querySelector('#swiper-with-pagination-cards');
  if (swiperWithPagination) {
    new Swiper(swiperWithPagination, {
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false
      },
      pagination: {
        clickable: true,
        el: '.swiper-pagination'
      }
    });
  }

  // Revenue Generated Area Chart
  // --------------------------------------------------------------------
  const revenueGeneratedEl = document.querySelector('#revenueGenerated'),
    revenueGeneratedConfig = {
      chart: {
        height: 130,
        type: 'area',
        parentHeightOffset: 0,
        toolbar: {
          show: false
        },
        sparkline: {
          enabled: true
        }
      },
      markers: {
        colors: 'transparent',
        strokeColors: 'transparent'
      },
      grid: {
        show: false
      },
      colors: [config.colors.success],
      fill: {
        type: 'gradient',
        gradient: {
          shade: shadeColor,
          shadeIntensity: 0.8,
          opacityFrom: 0.6,
          opacityTo: 0.1
        }
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        width: 2,
        curve: 'smooth'
      },
      series: [
        {
          data: [300, 350, 330, 380, 340, 400, 380]
        }
      ],
      xaxis: {
        show: true,
        lines: {
          show: false
        },
        labels: {
          show: false
        },
        stroke: {
          width: 0
        },
        axisBorder: {
          show: false
        }
      },
      yaxis: {
        stroke: {
          width: 0
        },
        show: false
      },
      tooltip: {
        enabled: false
      }
    };
  if (typeof revenueGeneratedEl !== undefined && revenueGeneratedEl !== null) {
    const revenueGenerated = new ApexCharts(revenueGeneratedEl, revenueGeneratedConfig);
    revenueGenerated.render();
  }

  // Earning Reports Bar Chart
  // --------------------------------------------------------------------
  


  // Support Tracker - Radial Bar Chart
  // --------------------------------------------------------------------
  const supportTrackerEl = document.querySelector('#supportTracker'),
    supportTrackerOptions = {
      series: [85],
      labels: ['Completed Task'],
      chart: {
        height: 360,
        type: 'radialBar'
      },
      plotOptions: {
        radialBar: {
          offsetY: 10,
          startAngle: -140,
          endAngle: 130,
          hollow: {
            size: '65%'
          },
          track: {
            background: cardColor,
            strokeWidth: '100%'
          },
          dataLabels: {
            name: {
              offsetY: -20,
              color: labelColor,
              fontSize: '13px',
              fontWeight: '400',
              fontFamily: 'Public Sans'
            },
            value: {
              offsetY: 10,
              color: headingColor,
              fontSize: '38px',
              fontWeight: '600',
              fontFamily: 'Public Sans'
            }
          }
        }
      },
      colors: [config.colors.primary],
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          shadeIntensity: 0.5,
          gradientToColors: [config.colors.primary],
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 0.6,
          stops: [30, 70, 100]
        }
      },
      stroke: {
        dashArray: 10
      },
      grid: {
        padding: {
          top: -20,
          bottom: 5
        }
      },
      states: {
        hover: {
          filter: {
            type: 'none'
          }
        },
        active: {
          filter: {
            type: 'none'
          }
        }
      },
      responsive: [
        {
          breakpoint: 1025,
          options: {
            chart: {
              height: 330
            }
          }
        },
        {
          breakpoint: 769,
          options: {
            chart: {
              height: 280
            }
          }
        }
      ]
    };
  if (typeof supportTrackerEl !== undefined && supportTrackerEl !== null) {
    const supportTracker = new ApexCharts(supportTrackerEl, supportTrackerOptions);
    supportTracker.render();
  }

  // Total Earning Chart - Bar Chart
  // --------------------------------------------------------------------
  const totalEarningChartEl = document.querySelector('#totalEarningChart'),
    totalEarningChartOptions = {
      series: [
        {
          name: 'Earning',
          data: [15, 10, 20, 8, 12, 18, 12, 5]
        },
        {
          name: 'Expense',
          data: [-7, -10, -7, -12, -6, -9, -5, -8]
        }
      ],
      chart: {
        height: 230,
        parentHeightOffset: 0,
        stacked: true,
        type: 'bar',
        toolbar: { show: false }
      },
      tooltip: {
        enabled: false
      },
      legend: {
        show: false
      },
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: '18%',
          borderRadius: 5,
          startingShape: 'rounded',
          endingShape: 'rounded'
        }
      },
      colors: [config.colors.primary, grayColor],
      dataLabels: {
        enabled: false
      },
      grid: {
        show: false,
        padding: {
          top: -40,
          bottom: -20,
          left: -10,
          right: -2
        }
      },
      xaxis: {
        labels: {
          show: false
        },
        axisTicks: {
          show: false
        },
        axisBorder: {
          show: false
        }
      },
      yaxis: {
        labels: {
          show: false
        }
      },
      responsive: [
        {
          breakpoint: 1468,
          options: {
            plotOptions: {
              bar: {
                columnWidth: '22%'
              }
            }
          }
        },
        {
          breakpoint: 1197,
          options: {
            chart: {
              height: 228
            },
            plotOptions: {
              bar: {
                borderRadius: 8,
                columnWidth: '26%'
              }
            }
          }
        },
        {
          breakpoint: 783,
          options: {
            chart: {
              height: 232
            },
            plotOptions: {
              bar: {
                borderRadius: 6,
                columnWidth: '28%'
              }
            }
          }
        },
        {
          breakpoint: 589,
          options: {
            plotOptions: {
              bar: {
                columnWidth: '16%'
              }
            }
          }
        },
        {
          breakpoint: 520,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 6,
                columnWidth: '18%'
              }
            }
          }
        },
        {
          breakpoint: 426,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 5,
                columnWidth: '20%'
              }
            }
          }
        },
        {
          breakpoint: 381,
          options: {
            plotOptions: {
              bar: {
                columnWidth: '24%'
              }
            }
          }
        }
      ],
      states: {
        hover: {
          filter: {
            type: 'none'
          }
        },
        active: {
          filter: {
            type: 'none'
          }
        }
      }
    };
  if (typeof totalEarningChartEl !== undefined && totalEarningChartEl !== null) {
    const totalEarningChart = new ApexCharts(totalEarningChartEl, totalEarningChartOptions);
    totalEarningChart.render();
  }

  //  For Datatable
  // --------------------------------------------------------------------
  var dt_projects_table = $('.datatables-projects');

  if (dt_projects_table.length) {
    var dt_project = dt_projects_table.DataTable({

     
      columnDefs: [
      
      ],
      order: [[2, 'desc']],
      dom: '<"card-header pb-0 pt-sm-0"<"head-label text-center"><"d-flex justify-content-center justify-content-md-end"f>>t<"row mx-2"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
      displayLength: 5,
      lengthMenu: [5, 10, 25, 50, 75, 100],
      responsive: {
        details: {
          display: $.fn.dataTable.Responsive.display.modal({
            header: function (row) {
              var data = row.data();
              return 'User Details';
            }
          }),
          type: 'column',
          renderer: function (api, rowIdx, columns) {
            var data = $.map(columns, function (col, i) {
              return col.title !== '' // ? Do not show row in modal popup if title is blank (for check box)
                ? '<tr data-dt-row="' +
                    col.rowIndex +
                    '" data-dt-column="' +
                    col.columnIndex +
                    '">' +
                    '<td>' +
                    col.title +
                    ':' +
                    '</td> ' +
                    '<td>' +
                    col.data +
                    '</td>' +
                    '</tr>'
                : '';
            }).join('');

            return data ? $('<table class="table"/><tbody />').append(data) : false;
          }
        }
      }
    });
    $('div.head-label').html('<h5 class="card-title mb-0">Recently add Users</h5>');
  }

  // Filter form control to default size
  // ? setTimeout used for multilingual table initialization
  setTimeout(() => {
    $('.dataTables_filter .form-control').removeClass('form-control-sm');
    $('.dataTables_length .form-select').removeClass('form-select-sm');
  }, 300);
})();
