<?php

/* @ESFEspaceAbonne/back/langueTwo.html.twig */
class __TwigTemplate_9a344a8310f2c00abaaa709b5333794cd92071c457ffedac1a1a8cef0ded64d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/langueTwo.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_745b00290133c4f45848d624b2f3bcedcffb8bc96621a49ce5c8d0e0e8f23279 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_745b00290133c4f45848d624b2f3bcedcffb8bc96621a49ce5c8d0e0e8f23279->enter($__internal_745b00290133c4f45848d624b2f3bcedcffb8bc96621a49ce5c8d0e0e8f23279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/langueTwo.html.twig"));

        $__internal_c43cd29e1b3b0d98139e15ca61e13e85e20f4ef11e51ac69920263af1d9a301d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c43cd29e1b3b0d98139e15ca61e13e85e20f4ef11e51ac69920263af1d9a301d->enter($__internal_c43cd29e1b3b0d98139e15ca61e13e85e20f4ef11e51ac69920263af1d9a301d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/langueTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_745b00290133c4f45848d624b2f3bcedcffb8bc96621a49ce5c8d0e0e8f23279->leave($__internal_745b00290133c4f45848d624b2f3bcedcffb8bc96621a49ce5c8d0e0e8f23279_prof);

        
        $__internal_c43cd29e1b3b0d98139e15ca61e13e85e20f4ef11e51ac69920263af1d9a301d->leave($__internal_c43cd29e1b3b0d98139e15ca61e13e85e20f4ef11e51ac69920263af1d9a301d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a8277fd76dc4fce85f467d4ccffb1177e9028b421d780ad0880e1e0d237de50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a8277fd76dc4fce85f467d4ccffb1177e9028b421d780ad0880e1e0d237de50->enter($__internal_4a8277fd76dc4fce85f467d4ccffb1177e9028b421d780ad0880e1e0d237de50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9147c9b9325dfe5405896c0f3ab8aba43022a04b7dba30e16eaa11ec00d75822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9147c9b9325dfe5405896c0f3ab8aba43022a04b7dba30e16eaa11ec00d75822->enter($__internal_9147c9b9325dfe5405896c0f3ab8aba43022a04b7dba30e16eaa11ec00d75822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Langue - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9147c9b9325dfe5405896c0f3ab8aba43022a04b7dba30e16eaa11ec00d75822->leave($__internal_9147c9b9325dfe5405896c0f3ab8aba43022a04b7dba30e16eaa11ec00d75822_prof);

        
        $__internal_4a8277fd76dc4fce85f467d4ccffb1177e9028b421d780ad0880e1e0d237de50->leave($__internal_4a8277fd76dc4fce85f467d4ccffb1177e9028b421d780ad0880e1e0d237de50_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_f5eb36224618053ecad79c75b97639b2266c53800272c280f7b3f8ed60618d93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5eb36224618053ecad79c75b97639b2266c53800272c280f7b3f8ed60618d93->enter($__internal_f5eb36224618053ecad79c75b97639b2266c53800272c280f7b3f8ed60618d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_546bd11545b4f4629cda6c36e746d0d45505d4d1073e149cc5ab644e6bfd218d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_546bd11545b4f4629cda6c36e746d0d45505d4d1073e149cc5ab644e6bfd218d->enter($__internal_546bd11545b4f4629cda6c36e746d0d45505d4d1073e149cc5ab644e6bfd218d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 10
        if (array_key_exists("document", $context)) {
            echo "        
                <h2>Etape 2</h2>
                <p>veuillez télécharger le(s) PDF ci-dessous et imprimer le PDF afin de nous le renvoyer remplit.</p>      
                <table id=\"documentInsciption\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
                    <thead>
                        <tr>
                            <th>Nom du document</th>
                            <th>Lien de téléchargement</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["document"] ?? $this->getContext($context, "document")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 22
                echo "                            <tr>
                                <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "pdfName", array()), "html", null, true);
                echo "</td>
                                <td>
                                    <a class=\"btn btn-primary view-pdf\" href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("universites/pdf/" . $this->getAttribute($context["item"], "pdfName", array())) . ".pdf")), "html", null, true);
                echo "\" target=\"_blank\">Télécharger</a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                    </tbody>
                </table>    
                <a class=\"btn btn-danger\" href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_langueStepsOne");
            echo "\">Precedent</a>
                <a class=\"btn btn-primary\" href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_langueStepsThree");
            echo "\">Suivant</a>
            ";
        }
        // line 34
        echo "        </div>
    </div>

    <script type=\"text/javascript\" class=\"init\">
        \$(document).ready(function() {
            var table = \$('#documentInsciption').DataTable( {
                paging: true,
                responsive: true,
                searching: false,
                \"lengthChange\": false
            } );
            new \$.fn.dataTable.FixedHeader( table );
        } );
    </script>
";
        
        $__internal_546bd11545b4f4629cda6c36e746d0d45505d4d1073e149cc5ab644e6bfd218d->leave($__internal_546bd11545b4f4629cda6c36e746d0d45505d4d1073e149cc5ab644e6bfd218d_prof);

        
        $__internal_f5eb36224618053ecad79c75b97639b2266c53800272c280f7b3f8ed60618d93->leave($__internal_f5eb36224618053ecad79c75b97639b2266c53800272c280f7b3f8ed60618d93_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/langueTwo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 34,  120 => 32,  116 => 31,  112 => 29,  102 => 25,  97 => 23,  94 => 22,  90 => 21,  76 => 10,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":backend:sidebar.html.twig\" %}

{% block title %}
    Inscription Langue - {{ parent() }}
{% endblock %}

{% block Content %} 
    <div class=\"row\">
        <div class=\"col-md-12\">
            {% if document is defined %}        
                <h2>Etape 2</h2>
                <p>veuillez télécharger le(s) PDF ci-dessous et imprimer le PDF afin de nous le renvoyer remplit.</p>      
                <table id=\"documentInsciption\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
                    <thead>
                        <tr>
                            <th>Nom du document</th>
                            <th>Lien de téléchargement</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in document %}
                            <tr>
                                <td>{{ item.pdfName }}</td>
                                <td>
                                    <a class=\"btn btn-primary view-pdf\" href=\"{{ asset('universites/pdf/' ~ item.pdfName ~ \".pdf\") }}\" target=\"_blank\">Télécharger</a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>    
                <a class=\"btn btn-danger\" href=\"{{ path('esf_espace_abonne_langueStepsOne') }}\">Precedent</a>
                <a class=\"btn btn-primary\" href=\"{{ path('esf_espace_abonne_langueStepsThree') }}\">Suivant</a>
            {% endif %}
        </div>
    </div>

    <script type=\"text/javascript\" class=\"init\">
        \$(document).ready(function() {
            var table = \$('#documentInsciption').DataTable( {
                paging: true,
                responsive: true,
                searching: false,
                \"lengthChange\": false
            } );
            new \$.fn.dataTable.FixedHeader( table );
        } );
    </script>
{% endblock %}

{#                OK mais moche                
<img src=\"{{ vich_uploader_asset(item, 'pdfFile') }}\" alt=\"{{ item.pdfName }}\" />
#}", "@ESFEspaceAbonne/back/langueTwo.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\langueTwo.html.twig");
    }
}
