Public Class Form1
    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        Dim harga, jumlah, total, diskon, bayar As Double
        Dim bonus As String
        harga = TextBox2.Text
        jumlah = TextBox3.Text
        total = harga * jumlah
        If total >= 500000 Then
            diskon = 20 * total / 100
            bonus = "tas pinggang"
        ElseIf total >= 200000 & total <= 500000 Then
            diskon = 15 * total / 100
            bonus = "Payung"
        ElseIf total >= 100000 & total <= 200000 Then
            diskon = 10 * total / 100
            bonus = "Kaos"
        ElseIf total >= 50000 & total <= 100000 Then
            diskon = 5 * total / 100
            bonus = "Cangkir"
        ElseIf total <= 50000 Then
            diskon = 0
            bonus = "Tidak Ada"
        End If
        bayar = total - diskon

        TextBox4.Text = total
        TextBox5.Text = diskon
        TextBox6.Text = bayar
        TextBox7.Text = bonus
        MessageBox.Show(TextBox3.Text & " " & TextBox1.Text & " = " & TextBox6.Text & vbCrLf & "bonus = " & TextBox7.Text, "HARGA", MessageBoxButtons.OK, MessageBoxIcon.Information)
    End Sub

    Private Sub Button2_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button2.Click
        TextBox1.Text = ""
        TextBox2.Text = ""
        TextBox3.Text = ""
        TextBox4.Text = ""
        TextBox5.Text = ""
        TextBox6.Text = ""
        TextBox7.Text = ""
    End Sub

    Private Sub Button3_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button3.Click
        End
    End Sub

    Private Sub Form1_Load(sender As System.Object, e As System.EventArgs) Handles MyBase.Load

    End Sub
End Class
