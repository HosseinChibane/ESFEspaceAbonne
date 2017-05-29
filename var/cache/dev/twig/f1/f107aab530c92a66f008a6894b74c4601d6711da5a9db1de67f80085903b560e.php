<?php

/* @ESFEspaceAbonne/back/preparationTwo.html.twig */
class __TwigTemplate_be06da6c464a9a5438639a220df6bce5c0a37aea1f6f001e0335001c8c76be3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/preparationTwo.html.twig", 1);
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
        $__internal_7ee3ae2de09b1151433f6829baa3b575ddcf391353d2fed38efa31b270398d74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ee3ae2de09b1151433f6829baa3b575ddcf391353d2fed38efa31b270398d74->enter($__internal_7ee3ae2de09b1151433f6829baa3b575ddcf391353d2fed38efa31b270398d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/preparationTwo.html.twig"));

        $__internal_280f7ce8052aa6d891fe7ee2082dac01661ca034e27732edadeb03834ed28095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_280f7ce8052aa6d891fe7ee2082dac01661ca034e27732edadeb03834ed28095->enter($__internal_280f7ce8052aa6d891fe7ee2082dac01661ca034e27732edadeb03834ed28095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/preparationTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ee3ae2de09b1151433f6829baa3b575ddcf391353d2fed38efa31b270398d74->leave($__internal_7ee3ae2de09b1151433f6829baa3b575ddcf391353d2fed38efa31b270398d74_prof);

        
        $__internal_280f7ce8052aa6d891fe7ee2082dac01661ca034e27732edadeb03834ed28095->leave($__internal_280f7ce8052aa6d891fe7ee2082dac01661ca034e27732edadeb03834ed28095_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d070074f93a525e3c3888fd806a91ea1804affe6fc1152d82d6a370df66d8518 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d070074f93a525e3c3888fd806a91ea1804affe6fc1152d82d6a370df66d8518->enter($__internal_d070074f93a525e3c3888fd806a91ea1804affe6fc1152d82d6a370df66d8518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7b0cca115a480de28beb7e953b5f0eceb84a8e1f77cf45c9f7b413e5e0d616ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b0cca115a480de28beb7e953b5f0eceb84a8e1f77cf45c9f7b413e5e0d616ef->enter($__internal_7b0cca115a480de28beb7e953b5f0eceb84a8e1f77cf45c9f7b413e5e0d616ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Préparation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7b0cca115a480de28beb7e953b5f0eceb84a8e1f77cf45c9f7b413e5e0d616ef->leave($__internal_7b0cca115a480de28beb7e953b5f0eceb84a8e1f77cf45c9f7b413e5e0d616ef_prof);

        
        $__internal_d070074f93a525e3c3888fd806a91ea1804affe6fc1152d82d6a370df66d8518->leave($__internal_d070074f93a525e3c3888fd806a91ea1804affe6fc1152d82d6a370df66d8518_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_5f511639d2113c369954279e13077216de30e7049e8a7661f4a801ad3b75042b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f511639d2113c369954279e13077216de30e7049e8a7661f4a801ad3b75042b->enter($__internal_5f511639d2113c369954279e13077216de30e7049e8a7661f4a801ad3b75042b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_92d2290b93876ab9c2dfe49a17a22267e7050538ab0d5d03842664846fb69e68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d2290b93876ab9c2dfe49a17a22267e7050538ab0d5d03842664846fb69e68->enter($__internal_92d2290b93876ab9c2dfe49a17a22267e7050538ab0d5d03842664846fb69e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_92d2290b93876ab9c2dfe49a17a22267e7050538ab0d5d03842664846fb69e68->leave($__internal_92d2290b93876ab9c2dfe49a17a22267e7050538ab0d5d03842664846fb69e68_prof);

        
        $__internal_5f511639d2113c369954279e13077216de30e7049e8a7661f4a801ad3b75042b->leave($__internal_5f511639d2113c369954279e13077216de30e7049e8a7661f4a801ad3b75042b_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/preparationTwo.html.twig";
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
#}", "@ESFEspaceAbonne/back/preparationTwo.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\preparationTwo.html.twig");
    }
}
