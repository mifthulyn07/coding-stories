Public Class Form1
    Private Function Hitung()
        Dim harga, jumlah, total As Integer
        harga = TextBox4.Text
        jumlah = TextBox5.Text
        total = harga * jumlah
        TextBox6.Text = total
        Return total
    End Function
    Sub cekdatakosong()
        If TextBox1.Text = "" Then
            MessageBox.Show("kode barang harus diisi!", "konfirmasi", MessageBoxButtons.OK, MessageBoxIcon.Warning)
            TextBox1.Focus()
        ElseIf TextBox2.Text = "" Then
            MessageBox.Show("nama barang harus diisi!", "konfirmasi", MessageBoxButtons.OK, MessageBoxIcon.Warning)
            TextBox2.Focus()
        ElseIf TextBox3.Text = "" Then
            MessageBox.Show("satuan barang harus diisi!", "konfirmasi", MessageBoxButtons.OK, MessageBoxIcon.Warning)
            TextBox3.Focus()
        ElseIf TextBox4.Text = "" Then
            MessageBox.Show("harga barang harus diisi!", "konfirmasi", MessageBoxButtons.OK, MessageBoxIcon.Warning)
            TextBox4.Focus()
        ElseIf TextBox5.Text = "" Then
            MessageBox.Show("jumlah barang harus diisi!", "konfirmasi", MessageBoxButtons.OK, MessageBoxIcon.Warning)
            TextBox5.Focus()
        Else
            Call Hitung()
        End If
    End Sub
    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        Call cekdatakosong()
    End Sub

    Private Sub Button2_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button2.Click
        TextBox1.Text = ""
        TextBox2.Text = ""
        TextBox3.Text = ""
        TextBox4.Text = ""
        TextBox5.Text = ""
        TextBox6.Text = ""
        TextBox6.Enabled = False
    End Sub

    Private Sub Button3_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button3.Click
        Dim tutup As String
        tutup = MessageBox.Show("yakin tutup form ini?", "konfirmasi", MessageBoxButtons.YesNo, MessageBoxIcon.Question)
        If tutup = MsgBoxResult.Yes Then
            End
        Else
            Exit Sub
        End If
    End Sub
End Class
