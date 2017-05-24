<?php

/* @ESFEspaceAbonne/Default/preparationTwo.html.twig */
class __TwigTemplate_3c90e91f6c1bb088d407f73fb140211e1c30fe2e49e14f2b69be375c23a2da9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/Default/preparationTwo.html.twig", 1);
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
        $__internal_9eb5d020d3fd2b9cde35dd1aa24c87a1f0c656e31b9570f0576857c0a8193246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eb5d020d3fd2b9cde35dd1aa24c87a1f0c656e31b9570f0576857c0a8193246->enter($__internal_9eb5d020d3fd2b9cde35dd1aa24c87a1f0c656e31b9570f0576857c0a8193246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/Default/preparationTwo.html.twig"));

        $__internal_d614df3b06d269c090fbaa9e140872e59d38e1f97eabc2d4332361ef0a91611a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d614df3b06d269c090fbaa9e140872e59d38e1f97eabc2d4332361ef0a91611a->enter($__internal_d614df3b06d269c090fbaa9e140872e59d38e1f97eabc2d4332361ef0a91611a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/Default/preparationTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9eb5d020d3fd2b9cde35dd1aa24c87a1f0c656e31b9570f0576857c0a8193246->leave($__internal_9eb5d020d3fd2b9cde35dd1aa24c87a1f0c656e31b9570f0576857c0a8193246_prof);

        
        $__internal_d614df3b06d269c090fbaa9e140872e59d38e1f97eabc2d4332361ef0a91611a->leave($__internal_d614df3b06d269c090fbaa9e140872e59d38e1f97eabc2d4332361ef0a91611a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a19f74595377b47983495289949c43949fab2a0d0e4fb5ad6881d89a2043b77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a19f74595377b47983495289949c43949fab2a0d0e4fb5ad6881d89a2043b77->enter($__internal_4a19f74595377b47983495289949c43949fab2a0d0e4fb5ad6881d89a2043b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e28f464adee2764bb5ea370941ef4711bec38d2da749dce2a5c6afb0e2224714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e28f464adee2764bb5ea370941ef4711bec38d2da749dce2a5c6afb0e2224714->enter($__internal_e28f464adee2764bb5ea370941ef4711bec38d2da749dce2a5c6afb0e2224714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Préparation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e28f464adee2764bb5ea370941ef4711bec38d2da749dce2a5c6afb0e2224714->leave($__internal_e28f464adee2764bb5ea370941ef4711bec38d2da749dce2a5c6afb0e2224714_prof);

        
        $__internal_4a19f74595377b47983495289949c43949fab2a0d0e4fb5ad6881d89a2043b77->leave($__internal_4a19f74595377b47983495289949c43949fab2a0d0e4fb5ad6881d89a2043b77_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_11959203b1034a1eb8c08051d8975e66ff93b35178f496842969926af5b9d7fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11959203b1034a1eb8c08051d8975e66ff93b35178f496842969926af5b9d7fd->enter($__internal_11959203b1034a1eb8c08051d8975e66ff93b35178f496842969926af5b9d7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_7af43fa049faaf350a74c665a624b3e64ab5317b391be96d5edcabea04f48ded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7af43fa049faaf350a74c665a624b3e64ab5317b391be96d5edcabea04f48ded->enter($__internal_7af43fa049faaf350a74c665a624b3e64ab5317b391be96d5edcabea04f48ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_7af43fa049faaf350a74c665a624b3e64ab5317b391be96d5edcabea04f48ded->leave($__internal_7af43fa049faaf350a74c665a624b3e64ab5317b391be96d5edcabea04f48ded_prof);

        
        $__internal_11959203b1034a1eb8c08051d8975e66ff93b35178f496842969926af5b9d7fd->leave($__internal_11959203b1034a1eb8c08051d8975e66ff93b35178f496842969926af5b9d7fd_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/Default/preparationTwo.html.twig";
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
#}", "@ESFEspaceAbonne/Default/preparationTwo.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\Default\\preparationTwo.html.twig");
    }
}
