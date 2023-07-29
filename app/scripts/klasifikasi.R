# Mengatur direktori kerja ke direktori skrip R
setwd("C:/laragon/www/smart-economy/")

# Install library dan load data
library(C50)
library(ggplot2)
library(jsonlite)

# Ambil argumen berupa nama file CSV
args <- commandArgs(trailingOnly = TRUE)
csvFile <- args[1]

# Baca data dari file CSV
data <- read.csv(csvFile, sep = ";")
row.names(data) <- make.unique(row.names(data))

# Membagi data menjadi data latih dan data uji
set.seed(123)
index <- sample(1:nrow(data), round(nrow(data) * 0.7), replace = FALSE)
train <- data[index, ]
test <- data[-index, ]

# Membuat model C5.0 dan melakukan prediksi pada data uji
model <- C5.0(as.factor(Class) ~ ., data = train)
predictions <- predict(model, newdata = test, type = "class")

# Evaluasi model dengan confusion matrix
conf_mat <- table(test$Class, predictions)
TP <- diag(conf_mat)
FP <- colSums(conf_mat) - TP
FN <- rowSums(conf_mat) - TP
TN <- sum(conf_mat) - (TP + FP + FN)
accuracy <- sum(TP) / sum(conf_mat)
precision <- TP / (TP + FP)
recall <- TP / (TP + FN)
F1 <- 2 * precision * recall / (precision + recall)
AUC <- (TP / (TP + FN) + TN / (TN + FP)) / 2

# Simpan hasil evaluasi ke dalam variabel
evaluation <- list(
    accuracy = accuracy,
    precision = precision,
    recall = recall,
    F1 = F1,
    AUC = AUC
)

# Membuat scatterplot
scatterplot <- ggplot(data, aes(x = montly_income, y = montly_outcome, color = Class)) +
    geom_point() +
    labs(
        title = "Scatterplot Pendapatan dan Pengeluaran Bulanan",
        x = "Pendapatan Bulanan",
        y = "Pengeluaran Bulanan",
        color = "Class"
    ) +
    theme_bw()

# Mengambil modus (class yang paling banyak) berdasarkan domisili
domisili_modus <- tapply(data$Class, data$domisili, function(x) {
    modus <- names(which.max(table(x)))
    count <- table(x)[modus]
    list(class = modus, count = count)
})

# Menyimpan hasil modus ke dalam variabel
class_modus <- data.frame(Domisili = names(domisili_modus), Modus = sapply(domisili_modus, function(x) x$class), Count = sapply(domisili_modus, function(x) x$count))

# Tentukan direktori tujuan
output_dir <- file.path("public", "plot")

# Pastikan direktori tujuan sudah ada, jika tidak buat direktori baru
if (!dir.exists(output_dir)) {
    dir.create(output_dir, recursive = TRUE)
}

# Menyimpan plot sebagai file gambar di direktori tujuan
output_file <- file.path(output_dir, "scatterplot.png")
ggsave(output_file, plot = scatterplot, width = 6, height = 4)

# Simpan hasil evaluasi dan nama file gambar ke dalam variabel output
output <- list(
    evaluation = evaluation,
    scatterplotImage = "scatterplot.png",
    class_modus = class_modus
)

# Konversi output menjadi JSON
output_json <- toJSON(output)
cat(output_json)
