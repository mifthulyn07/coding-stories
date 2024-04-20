Public Class Form1

    Private Sub Form1_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load
        Dim arr(3, 1) As String
        arr(0, 0) = "NIM"
        arr(0, 1) = "NAMA"
        arr(1, 0) = "JENIS KELAMIN"
        arr(1, 1) = "PRODI"
        arr(2, 0) = "LAKI-LAKI"
        arr(2, 1) = "PEREMPUAN"
        arr(3, 0) = "SISTEM INFORMASI"
        arr(3, 1) = "KOMPUTERISASI AKUTANSI"

        ListView1.GridLines = True
        ListView1.View = View.Details

        For baris = 0 To 1
            For kolom = 0 To 1
                ListView1.Columns.Add(arr(baris, kolom), 100)
            Next kolom
        Next baris

        For baris = 2 To 2
            For kolom = 0 To 1
                ComboBox1.Items.Add(arr(baris, kolom))
            Next kolom
        Next baris

        For baris = 3 To 3
            For kolom = 0 To 1
                ComboBox2.Items.Add(arr(baris, kolom))
            Next kolom
        Next baris
    End Sub

    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        Dim arr(3) As String
        arr(0) = TextBox1.Text
        arr(1) = TextBox2.Text
        arr(2) = ComboBox1.Text
        arr(3) = ComboBox2.Text

        Dim listitem As ListViewItem
        listitem = New ListViewItem
        listitem = ListView1.Items.Add(arr(0))
        listitem.SubItems.Add(arr(1))
        listitem.SubItems.Add(arr(2))
        listitem.SubItems.Add(arr(3))
        TextBox1.Text = TextBox1.Text + 1
        TextBox2.Text = ""
        ComboBox1.Text = ""
        ComboBox2.Text = ""
    End Sub
End Class
