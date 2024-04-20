Public Class Form3

    Private Sub Button2_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button2.Click
        Dim namafile As String
        With Me.OpenFileDialog1
            .Filter = "Bitmaps|*.bmp"
            .FilterIndex = 2
            .InitialDirectory = "C:\"
            .Multiselect = True
            .DefaultExt = "bmp"
            If .ShowDialog = Windows.Forms.DialogResult.OK Then
                namafile = .FileName
                PictureBox1.Image = Image.FromFile(namafile)
            End If
        End With
    End Sub

    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        If PictureBox1.Image Is Nothing Then
            MsgBox("Tidak ada gambar untuk diubah",MsgBoxStyle.Critical + vbOKOnly, "Maaf..")
            Exit Sub
        End If
        Dim gambar As New Bitmap(PictureBox1.Image)
        Dim x, y, warna As Integer
        For x = 0 To gambar.Width - 1
            For y = 0 To gambar.Height - 1
                Dim p = gambar.GetPixel(x, y)
                warna = CInt(p.R * 0.3 + p.G * 0.59 + p.B * 0.11)
                gambar.SetPixel(x, y, Color.FromArgb(warna, warna, warna))
            Next y
        Next x
        PictureBox2.Image = gambar
    End Sub
End Class