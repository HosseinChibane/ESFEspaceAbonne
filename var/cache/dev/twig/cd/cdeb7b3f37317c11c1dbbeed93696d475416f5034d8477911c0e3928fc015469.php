<?php

/* ESFEspaceAbonneBundle:back:preparationTwo.html.twig */
class __TwigTemplate_40ef3e92f3ab24b04a60dedc6f20fd8b2206d174b70724979b9d02d45332fe02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:preparationTwo.html.twig", 1);
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
        $__internal_17cf5b32c0bcff5136e51022128bd27061d6cbb51cc74e9f6f807a60e6d5fd38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17cf5b32c0bcff5136e51022128bd27061d6cbb51cc74e9f6f807a60e6d5fd38->enter($__internal_17cf5b32c0bcff5136e51022128bd27061d6cbb51cc74e9f6f807a60e6d5fd38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:preparationTwo.html.twig"));

        $__internal_a9c13f2553ab5619239a0c6e221b4ba94df39b306409c2db426a85e082755397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c13f2553ab5619239a0c6e221b4ba94df39b306409c2db426a85e082755397->enter($__internal_a9c13f2553ab5619239a0c6e221b4ba94df39b306409c2db426a85e082755397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:preparationTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17cf5b32c0bcff5136e51022128bd27061d6cbb51cc74e9f6f807a60e6d5fd38->leave($__internal_17cf5b32c0bcff5136e51022128bd27061d6cbb51cc74e9f6f807a60e6d5fd38_prof);

        
        $__internal_a9c13f2553ab5619239a0c6e221b4ba94df39b306409c2db426a85e082755397->leave($__internal_a9c13f2553ab5619239a0c6e221b4ba94df39b306409c2db426a85e082755397_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b697d430c3e6b0608ff76530eee8001a784c55f3d1c5da546509a294703f12d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b697d430c3e6b0608ff76530eee8001a784c55f3d1c5da546509a294703f12d9->enter($__internal_b697d430c3e6b0608ff76530eee8001a784c55f3d1c5da546509a294703f12d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b45604b87c20a443b59d7aaf4a196a261542fe2a0a12e55ec3235e7498132e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b45604b87c20a443b59d7aaf4a196a261542fe2a0a12e55ec3235e7498132e4f->enter($__internal_b45604b87c20a443b59d7aaf4a196a261542fe2a0a12e55ec3235e7498132e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Préparation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b45604b87c20a443b59d7aaf4a196a261542fe2a0a12e55ec3235e7498132e4f->leave($__internal_b45604b87c20a443b59d7aaf4a196a261542fe2a0a12e55ec3235e7498132e4f_prof);

        
        $__internal_b697d430c3e6b0608ff76530eee8001a784c55f3d1c5da546509a294703f12d9->leave($__internal_b697d430c3e6b0608ff76530eee8001a784c55f3d1c5da546509a294703f12d9_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_22ff729c49f406487098d23e334bbf244e56a233732ea7e6290fd3f8c0c3120b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22ff729c49f406487098d23e334bbf244e56a233732ea7e6290fd3f8c0c3120b->enter($__internal_22ff729c49f406487098d23e334bbf244e56a233732ea7e6290fd3f8c0c3120b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_defb5f7b3052cc525b8d2b5b80ade8d5bce0e5dbd7548aa45418764adce1079f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_defb5f7b3052cc525b8d2b5b80ade8d5bce0e5dbd7548aa45418764adce1079f->enter($__internal_defb5f7b3052cc525b8d2b5b80ade8d5bce0e5dbd7548aa45418764adce1079f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_preparationStepsOne");
            echo "\">Precedent</a>
                <a class=\"btn btn-primary\" href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_preparationStepsTwo");
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
        
        $__internal_defb5f7b3052cc525b8d2b5b80ade8d5bce0e5dbd7548aa45418764adce1079f->leave($__internal_defb5f7b3052cc525b8d2b5b80ade8d5bce0e5dbd7548aa45418764adce1079f_prof);

        
        $__internal_22ff729c49f406487098d23e334bbf244e56a233732ea7e6290fd3f8c0c3120b->leave($__internal_22ff729c49f406487098d23e334bbf244e56a233732ea7e6290fd3f8c0c3120b_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:preparationTwo.html.twig";
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
    Inscription Préparation - {{ parent() }}
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
                <a class=\"btn btn-danger\" href=\"{{ path('esf_espace_abonne_preparationStepsOne') }}\">Precedent</a>
                <a class=\"btn btn-primary\" href=\"{{ path('esf_espace_abonne_preparationStepsTwo') }}\">Suivant</a>
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
#}", "ESFEspaceAbonneBundle:back:preparationTwo.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/preparationTwo.html.twig");
    }
}
